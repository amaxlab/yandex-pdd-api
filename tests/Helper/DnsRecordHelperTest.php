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
        $this->assertEquals('127.0.0.1', $record->getContent());
        $this->assertEquals(DnsRecordModel::TTL, $record->getTtl());
    }
}
