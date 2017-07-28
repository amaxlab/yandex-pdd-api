<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Tests;

use AmaxLab\YandexPddApi\Manager\DnsManager;
use AmaxLab\YandexPddApi\Manager\DomainManager;
use AmaxLab\YandexPddApi\Client;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateClient()
    {
        $this->assertEquals(true, (new Client('')) instanceof Client);
    }

    public function testGetDomainManager()
    {
        $this->assertEquals(true, (new Client(''))->getDomainManager() instanceof DomainManager);
    }

    public function testGetDnsManager()
    {
        $this->assertEquals(true, (new Client(''))->getDnsManager() instanceof DnsManager);
    }
}
