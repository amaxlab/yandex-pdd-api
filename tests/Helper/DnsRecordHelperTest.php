<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Tests\Helper;

use AmaxLab\YandexPddApi\Helper\DnsRecordHelper;
use AmaxLab\YandexPddApi\Model\DnsRecordModel;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DnsRecordHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateARecord()
    {
        $record = DnsRecordHelper::createARecord('domain.com', 'www', '127.0.0.1');

        $this->assertEquals('domain.com', $record->getDomain());
        $this->assertEquals('www', $record->getSubDomain());
        $this->assertEquals('www.domain.com', $record->getFqdn());
        $this->assertEquals('127.0.0.1', $record->getContent());
        $this->assertEquals(DnsRecordModel::TTL, $record->getTtl());
        $this->assertEquals(DnsRecordModel::TYPE_A, $record->getType());
    }

    public function testCreateAAAARecord()
    {
        $record = DnsRecordHelper::createAAAARecord('domain.com', 'www', '::1/128');

        $this->assertEquals('domain.com', $record->getDomain());
        $this->assertEquals('www', $record->getSubDomain());
        $this->assertEquals('www.domain.com', $record->getFqdn());
        $this->assertEquals('::1/128', $record->getContent());
        $this->assertEquals(DnsRecordModel::TTL, $record->getTtl());
        $this->assertEquals(DnsRecordModel::TYPE_AAAA, $record->getType());
    }

    public function testCreateCNAMERecord()
    {
        $record = DnsRecordHelper::createCNAMERecord('domain.com', 'www', 'domain.com.');

        $this->assertEquals('domain.com', $record->getDomain());
        $this->assertEquals('www', $record->getSubDomain());
        $this->assertEquals('www.domain.com', $record->getFqdn());
        $this->assertEquals('domain.com.', $record->getContent());
        $this->assertEquals(DnsRecordModel::TTL, $record->getTtl());
        $this->assertEquals(DnsRecordModel::TYPE_CNAME, $record->getType());
    }
}
