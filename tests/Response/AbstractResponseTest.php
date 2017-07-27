<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Tests\Response;

use AmaxLab\YandexPddApi\Curl\CurlResponse;
use AmaxLab\YandexPddApi\Manager\DomainManager;
use AmaxLab\YandexPddApi\Response\GetDomainsListResponse;
use Xpmock\TestCaseTrait;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class AbstractResponseTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testAbstractResponse()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"success":"ok"}')))
            ->new()
        ;

        $domainList = (new DomainManager(''))->setCurl($curl)->getDomainList();

        $this->assertEquals(true, $domainList instanceof GetDomainsListResponse);
        $this->assertEquals('ok', $domainList->getSuccess());
        $this->assertEquals('', $domainList->getError());
    }
}
