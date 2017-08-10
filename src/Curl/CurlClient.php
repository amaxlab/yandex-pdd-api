<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Curl;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class CurlClient implements CurlClientInterface
{
    const METHOD_GET = 'GET';

    const METHOD_POST = 'POST';

    const METHOD_PUT = 'PUT';

    /**
     * @var resource
     */
    private $resource;

    /**
     * @param bool $verbose
     */
    public function __construct($verbose = false)
    {
        $this->resource = curl_init();

        curl_setopt($this->resource, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->resource, CURLOPT_VERBOSE, $verbose);
    }

    /**
     * @return void
     */
    public function __destruct()
    {
        curl_close($this->resource);
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $params
     * @param array $headers
     *
     * @return CurlResponse
     */
    public function request($method, $url, $params, $headers = [])
    {
        curl_setopt($this->resource, CURLOPT_URL, $url);
        curl_setopt($this->resource, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->resource, CURLOPT_POST, false);

        if ($method != self::METHOD_GET) {
            curl_setopt($this->resource, CURLOPT_POST, true);
            curl_setopt($this->resource, CURLOPT_POSTFIELDS, $params);
            curl_setopt($this->resource, CURLOPT_CUSTOMREQUEST, $method);
        }

        $response = $this->makeRequest();

        return new CurlResponse(curl_getinfo($this->resource, CURLINFO_HTTP_CODE), $response);
    }

    /**
     * @return string
     */
    private function makeRequest()
    {
        return curl_exec($this->resource);
    }
}
