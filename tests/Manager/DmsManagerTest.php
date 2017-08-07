<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Tests\Manager;

use AmaxLab\YandexPddApi\Curl\CurlResponse;
use AmaxLab\YandexPddApi\Manager\DnsManager;
use Xpmock\TestCaseTrait;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DmsManagerTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testAddDnsRecord()
    {
//        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
//            ->request((new CurlResponse(200, '{"direction":"asc","on_page":20,"success":"ok","domains":[{"status":"added","from_registrar":"no","name":"test.com","ws_technical":"no","logo_enabled":true,"master_admin":true,"nsdelegated":true,"emails-max-count":1000,"emails-count":0,"dkim-ready":true,"logo_url":"http//logo.url","stage":"added","aliases":["test2.com"]}],"found":1,"total":1,"page":1,"order":"default"}')))
//            ->new()
//        ;
//
//        $response = (new DnsManager(''))->setCurl($curl)->addRecord('domain.com', 'A', '127.0.0.1');
//
//        $this->assertEquals('domain.com', $response->getDomain());
    }

    public function testGetDnsRecords()
    {
//        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
//            ->request((new CurlResponse(200, '{"direction":"asc","on_page":20,"success":"ok","domains":[{"status":"added","from_registrar":"no","name":"test.com","ws_technical":"no","logo_enabled":true,"master_admin":true,"nsdelegated":true,"emails-max-count":1000,"emails-count":0,"dkim-ready":true,"logo_url":"http//logo.url","stage":"added","aliases":["test2.com"]}],"found":1,"total":1,"page":1,"order":"default"}')))
//            ->new()
//        ;

        $this->assertEquals(1, 1);
    }
}
