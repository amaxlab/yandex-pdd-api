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
use AmaxLab\YandexPddApi\Model\DnsRecordModel;
use Xpmock\TestCaseTrait;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DnsManagerTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testAddDnsRecord()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"record": {"content": "127.0.0.1", "domain": "domain.com", "fqdn": "www.domain.com", "priority": "", "ttl": 21600, "record_id": 123, "subdomain": "www", "type": "A"}, "domain": "domain.com", "success": "ok"}')))
            ->new()
        ;

        $response = (new DnsManager(''))->setCurl($curl)->addRecord((new DnsRecordModel())->setDomain('domain.com')->setSubDomain('www')->setFqdn('www.domain.com')->setType(DnsRecordModel::TYPE_A)->setContent('127.0.0.1'));
        $record = $response->getRecord();

        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals(123, $record->getRecordId());
        $this->assertEquals('domain.com', $record->getDomain());
        $this->assertEquals('127.0.0.1', $record->getContent());
        $this->assertEquals('www.domain.com', $record->getFqdn());
        $this->assertEquals(21600, $record->getTtl());
        $this->assertEquals('www', $record->getSubDomain());
        $this->assertEquals(DnsRecordModel::TYPE_A, $record->getType());
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
        $this->assertEquals(0, $records[0]->getRecordId());
        $this->assertEquals('domain.com', $records[0]->getDomain());
        $this->assertEquals('127.0.0.1', $records[0]->getContent());
        $this->assertEquals('test.domain.com', $records[0]->getFqdn());
        $this->assertEquals(21600, $records[0]->getTtl());
        $this->assertEquals('test', $records[0]->getSubDomain());
        $this->assertEquals(DnsRecordModel::TYPE_A, $records[0]->getType());
        $this->assertEquals(DnsRecordModel::TYPE_CNAME, $records[1]->getType());
        $this->assertEquals(900, $records[2]->getRetry());
        $this->assertEquals(14400, $records[2]->getRefresh());
        $this->assertEquals('admin@domain.com', $records[2]->getAdminMail());
        $this->assertEquals(1209600, $records[2]->getExpire());
        $this->assertEquals(DnsRecordModel::TYPE_SOA, $records[2]->getType());
        $this->assertEquals(14400, $records[2]->getMinTtl());
    }

    public function testEditDnsRecord()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"record_id": 123, "record": {"content": "8.8.8.8", "domain": "domain.com", "fqdn": "www.domain.com", "priority": "", "ttl": 21600, "record_id": 123, "operation": "editing", "subdomain": "www", "type": "A"}, "domain": "domain.com", "success": "ok"}')))
            ->new()
        ;

        $response = (new DnsManager(''))->setCurl($curl)->editRecord((new DnsRecordModel())->setRecordId(123)->setDomain('domain.com')->setSubDomain('www')->setFqdn('www.domain.com')->setType(DnsRecordModel::TYPE_A)->setContent('8.8.8.8'));
        $record = $response->getRecord();

        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals(123, $record->getRecordId());
        $this->assertEquals('domain.com', $record->getDomain());
        $this->assertEquals('8.8.8.8', $record->getContent());
        $this->assertEquals('www.domain.com', $record->getFqdn());
        $this->assertEquals(21600, $record->getTtl());
        $this->assertEquals('www', $record->getSubDomain());
        $this->assertEquals(DnsRecordModel::TYPE_A, $record->getType());
    }

    public function testDeleteDnsRecord()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"record_id": 123, "domain": "domain.com", "success": "ok"}')))
            ->new()
        ;

        $response = (new DnsManager(''))->setCurl($curl)->deleteRecord('domain.com', 123);
        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals(123, $response->getRecordId());
    }
}
