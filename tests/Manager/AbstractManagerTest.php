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
use Xpmock\TestCaseTrait;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class AbstractManagerTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testRequestMethodValidationThrow()
    {
        $this->setExpectedException('AmaxLab\YandexPddApi\Exception\RequestValidationException');
        $request = $this->mock('AmaxLab\YandexPddApi\Request\GetDomainsListRequest')
            ->getMethod('OPTIONS')
            ->new()
        ;

        (new DomainManager(''))->request($request);
    }

    public function testRequestParamsValidationThrow()
    {
        $this->setExpectedException('AmaxLab\YandexPddApi\Exception\RequestValidationException');
        $request = $this->mock('AmaxLab\YandexPddApi\Request\GetDomainsListRequest')
            ->getParams('')
            ->new()
        ;

        (new DomainManager(''))->request($request);
    }
}
