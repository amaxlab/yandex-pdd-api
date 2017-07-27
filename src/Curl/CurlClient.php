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
     * @param string $method
     * @param string $url
     * @param array $params
     * @param array $headers
     *
     * @return CurlResponse
     */
    public function request($method, $url, $params, $headers = [])
    {
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
        ];

        if ($method != self::METHOD_GET) {
            $options = array_merge($options, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $params,
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
