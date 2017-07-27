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
interface CurlClientInterface
{
    /**
     * @param string $method
     * @param string $url
     * @param array $params
     * @param array $headers
     *
     * @return CurlResponse
     */
    public function request($method, $url, $params, $headers = []);
}
