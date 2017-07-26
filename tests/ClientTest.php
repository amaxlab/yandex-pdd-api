<?php

namespace AmaxLab\YandexPddApi\Tests;

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
}
