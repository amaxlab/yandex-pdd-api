<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Tests\Curl;

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Curl\CurlResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amanxlab.ru>
 */
class CurlClientTest extends \PHPUnit_Framework_TestCase
{
    public function testResponse()
    {
        $client = new CurlClient();

        $this->assertEquals(true, $client->request('GET', 'http://localhost', []) instanceof CurlResponse);
        $this->assertEquals(true, $client->request('POST', 'http://localhost', []) instanceof CurlResponse);
    }
}