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

use AmaxLab\YandexPddApi\Curl\CurlResponse;
use stdClass;

/**
 * @author Egor Zyuskin <ezyuskin@amanxlab.ru>
 */
class CurlResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testResponse()
    {
        $response = new CurlResponse(200, '{"a":"1"}');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('{"a":"1"}', $response->getContent());
        $this->assertEquals(true, $response->getJson() instanceof stdClass);
        $this->assertEquals(1, $response->getJson()->a);
    }
}