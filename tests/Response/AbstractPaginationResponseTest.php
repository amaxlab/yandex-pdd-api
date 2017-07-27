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
class AbstractPaginationResponseTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testAbstractPaginationResponse()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"direction":"asc","on_page":20,"success":"ok","found":1,"total":1,"page":1,"order":"default"}')))
            ->new()
        ;

        $domainList = (new DomainManager(''))->setCurl($curl)->getDomainList();

        $this->assertEquals(true, $domainList instanceof GetDomainsListResponse);
        $this->assertEquals('asc', $domainList->getDirection());
        $this->assertEquals(20, $domainList->getOnPage());
        $this->assertEquals(1, $domainList->getFound());
        $this->assertEquals(1, $domainList->getTotal());
        $this->assertEquals(1, $domainList->getPage());
        $this->assertEquals('default', $domainList->getOrder());
    }
}
