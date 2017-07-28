<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Manager;

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Curl\CurlClientInterface;
use AmaxLab\YandexPddApi\Curl\CurlResponse;
use AmaxLab\YandexPddApi\Exception\RequestValidationException;
use AmaxLab\YandexPddApi\Exception\ResponseValidationException;
use AmaxLab\YandexPddApi\Exception\YandexResponseValidationException;
use AmaxLab\YandexPddApi\Request\RequestInterface;
use AmaxLab\YandexPddApi\Response\AbstractResponse;
use AmaxLab\YandexPddApi\Response\ResponseInterface;
use JsonMapper;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
abstract class AbstractManager
{
    const PDD_URL = 'https://pddimp.yandex.ru';

    const PDD_API_VERSION = 'api2';

    const PDD_TOKEN_HEADER = 'PddToken';

    const PDD_OAUTH_HEADER = 'Authorization';

    const PDD_OAUTH_HEADER_NAME = 'OAuth';

    /**
     * @var array
     */
    private $supportedMethods = [CurlClient::METHOD_GET, CurlClient::METHOD_POST, CurlClient::METHOD_PUT];

    /**
     * @var string
     */
    private $token;

    /**
     * @var boolean
     */
    private $isRegistrar;

    /**
     * @var string
     */
    private $registrarOAuthToken;

    /**
     * @var CurlClient
     */
    private $curl;

    /**
     * @var JsonMapper
     */
    private $mapper;

    /**
     * @param string $token
     * @param bool $isRegistrar
     * @param string $registrarOAuthToken
     */
    public function __construct($token, $isRegistrar = false, $registrarOAuthToken = '')
    {
        $this->curl = new CurlClient();
        $this->mapper = new JsonMapper();

        $this->token = $token;
        $this->isRegistrar = $isRegistrar;
        $this->registrarOAuthToken = $registrarOAuthToken;
    }

    /**
     * @param RequestInterface $request
     * @param string $responseClassName
     *
     * @return ResponseInterface|object
     */
    public function request(RequestInterface $request, $responseClassName)
    {
        $this->validateRequest($request);

        $response = $this->makeRequest($request->getMethod(), $request->getUri(), $request->getParams());

        $this->validateResponse($response);

        return $this->mapper->map($response->getJson(), new $responseClassName);
    }

    /**
     * @return CurlClientInterface
     */
    public function getCurl()
    {
        return $this->curl;
    }

    /**
     * @param CurlClientInterface $curl
     *
     * @return $this
     */
    public function setCurl(CurlClientInterface $curl)
    {
        $this->curl = $curl;

        return $this;
    }

    /**
     * @param RequestInterface $request
     * @throws RequestValidationException
     */
    private function validateRequest(RequestInterface $request)
    {
        if (!in_array($request->getMethod(), $this->supportedMethods)) {
            throw new RequestValidationException(sprintf(RequestValidationException::METHOD_VALIDATION_MESSAGE, $request->getMethod()));
        }

        if (!is_array($request->getParams())) {
            throw new RequestValidationException(RequestValidationException::PARAMS_VALIDATION_MESSAGE);
        }
    }

    /**
     * @param CurlResponse $response
     * @throws ResponseValidationException
     */
    private function validateResponse(CurlResponse $response)
    {
        if ($response->getStatusCode() != CurlResponse::STATUS_CODE_OK) {
            throw new ResponseValidationException(sprintf(ResponseValidationException::STATUS_CODE_VALIDATION_MESSAGE, $response->getStatusCode()));
        }

        if (!$json = $response->getJson()) {
            throw new ResponseValidationException(ResponseValidationException::JSON_CONTENT_VALIDATION_MESSAGE);
        }

        if ($json->success != AbstractResponse::SUCCESS_OK) {
            throw new YandexResponseValidationException($json->error);
        }
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $params
     *
     * @return CurlResponse
     */
    private function makeRequest($method, $uri, $params)
    {
        $url = $this->getUrl($method, $uri, $params, $this->isRegistrar);
        $headers = $this->getHeaders($this->isRegistrar, $this->token, $this->registrarOAuthToken);

        return $this->getCurl()->request($method, $url, $params, $headers);
    }

    /**
     * @param bool $isRegistrar
     * @param string $token
     * @param string $oauthToken
     *
     * @return array
     */
    private function getHeaders($isRegistrar, $token, $oauthToken)
    {
        $headers = [
            self::PDD_TOKEN_HEADER.': '.$token,
        ];

        if ($isRegistrar) {
            $headers = array_merge($headers, [
                self::PDD_OAUTH_HEADER.': '.self::PDD_OAUTH_HEADER_NAME.' '.$oauthToken,
            ]);
        }

        return $headers;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $params
     * @param bool $isRegistrar
     *
     * @return string
     */
    private function getUrl($method, $uri, $params = [], $isRegistrar = false)
    {
        return self::PDD_URL.'/'.self::PDD_API_VERSION.'/'
            .($isRegistrar ? 'registrar' : 'admin')
            .$uri.(($method == CurlClient::METHOD_GET) ? '?'.http_build_query($params) : '');
    }
}
