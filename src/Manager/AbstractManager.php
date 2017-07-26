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

use AmaxLab\YandexPddApi\Exception\RequestValidationException;
use AmaxLab\YandexPddApi\Exception\ResponseValidationException;
use AmaxLab\YandexPddApi\Request\AbstractRequest;
use AmaxLab\YandexPddApi\Request\RequestInterface;
use AmaxLab\YandexPddApi\Response\CurlResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
abstract class AbstractManager
{
    const PDD_URL = 'https://pddimp.yandex.ru';

    const PDD_TOKEN_HEADER = 'PddToken';

    const PDD_OAUTH_HEADER = 'Authorization';

    const PDD_OAUTH_HEADER_NAME = 'OAuth';

    const SUPPORTED_METHODS = [AbstractRequest::METHOD_GET, AbstractRequest::METHOD_POST];

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
     * @param string $token
     * @param bool $isRegistrar
     * @param string $registrarOAuthToken
     */
    public function __construct($token, $isRegistrar = false, $registrarOAuthToken = '')
    {
        $this->token = $token;
        $this->isRegistrar = $isRegistrar;
        $this->registrarOAuthToken = $registrarOAuthToken;
    }

    /**
     * @param RequestInterface $request
     *
     * @return CurlResponse
     */
    protected function request(RequestInterface $request)
    {
        $this->validateRequest($request);

        $response = $this->makeRequest($request->getMethod(), $request->getUri(), $request->getParams());

        $this->validateResponse($response);

        return $response;
    }

    /**
     * @param RequestInterface $request
     * @throws RequestValidationException
     */
    private function validateRequest(RequestInterface $request)
    {
        if (!in_array($request->getMethod(), self::SUPPORTED_METHODS)) {
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
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $param
     *
     * @return CurlResponse
     */
    private function makeRequest($method, $uri, $param)
    {
        $url = self::PDD_URL.'/api2/'.($this->isRegistrar ? 'registrar' : 'admin').$uri.(($method == AbstractRequest::METHOD_GET) ? '?'.http_build_query($param) : '');

        $headers = [
            self::PDD_TOKEN_HEADER.': '.$this->token,
        ];

        if ($this->isRegistrar) {
            $headers = array_merge($headers, [
                self::PDD_OAUTH_HEADER.': '.self::PDD_OAUTH_HEADER_NAME.' '.$this->registrarOAuthToken,
            ]);
        }

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
        ];

        if ($method != AbstractRequest::METHOD_GET) {
            $options = array_merge($options, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $param,
                CURLOPT_CUSTOMREQUEST => $method,
            ]);
        }


        $curl = curl_init();
        curl_setopt_array($curl, $options);
        $result = curl_exec($curl);
        $response = new CurlResponse(curl_getinfo($curl, CURLINFO_HTTP_CODE), $result);
        curl_close($curl);

        return $response;
    }
}
