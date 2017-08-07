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
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"records":[{"content":"127.0.0.1","domain":"domain.com","fqdn":"test.domain.com","priority":"","ttl":21600,"record_id":0,"subdomain":"test","type":"A"},{"content":"test2.domain.com.","domain":"domain.com","fqdn":"test2.domain.com","priority":"","ttl":21600,"record_id":1,"subdomain":"test2","type":"CNAME"},{"content":"ns1.domain.com.","domain":"domain.com","retry":900,"fqdn":"domain.com","refresh":14400,"admin_mail":"admin@domain.com","priority":"","expire":1209600,"ttl":21600,"record_id":2,"subdomain":"@","type":"SOA","minttl":14400},{"content":"xmpp.domain.com.","domain":"domain.com","weight":0,"fqdn":"_xmpp-client._tcp.domain.com","port":5222,"priority":20,"ttl":21600,"record_id":3,"subdomain":"_xmpp-client._tcp","type":"SRV"}],"domain":"domain.com","success":"ok"}')))
            ->new()
        ;

        $response = (new DnsManager(''))->setCurl($curl)->getRecords('domain.com');
        $records = $response->getRecords();
        $this->assertEquals(4, count($records));
        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals('0', $records[0]->getRecordId());
        $this->assertEquals('domain.com', $records[0]->getDomain());
        $this->assertEquals('127.0.0.1', $records[0]->getContent());
        $this->assertEquals('test.domain.com', $records[0]->getFqdn());
        $this->assertEquals('21600', $records[0]->getTtl());
    }
}
