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

use AmaxLab\YandexPddApi\Manager\DomainManager;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DomainManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testGetDomainsList()
    {
        $manager = new DomainManager('');
        $manager->getDomainList();
        $this->assertEquals(true, true);
    }
}
