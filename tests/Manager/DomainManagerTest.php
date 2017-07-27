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
use AmaxLab\YandexPddApi\Manager\DomainManager;
use AmaxLab\YandexPddApi\Response\GetDomainsListResponse;
use Xpmock\TestCaseTrait;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DomainManagerTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testGetDomainsList()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"direction":"asc","on_page":20,"success":"ok","domains":[{"status":"added","from_registrar":"no","name":"test.com","ws_technical":"no","logo_enabled":true,"master_admin":true,"nsdelegated":true,"emails-max-count":1000,"emails-count":0,"dkim-ready":true,"logo_url":"http//logo.url","stage":"added","aliases":["test2.com"]}],"found":1,"total":1,"page":1,"order":"default"}')))
            ->new()
        ;

        $domainList = (new DomainManager(''))->setCurl($curl)->getDomainList();
        $domains = $domainList->getDomains();
        $aliases = $domains[0]->getAliases();

        $this->assertEquals(true, $domainList instanceof GetDomainsListResponse);
        $this->assertEquals(1, count($domains));
        $this->assertEquals('added', $domains[0]->getStatus());
        $this->assertEquals('no', $domains[0]->getFromRegistrar());
        $this->assertEquals('test.com', $domains[0]->getName());
        $this->assertEquals('no', $domains[0]->getWsTechnical());
        $this->assertEquals(true, $domains[0]->isLogoEnabled());
        $this->assertEquals(true, $domains[0]->isMasterAdmin());
        $this->assertEquals(true, $domains[0]->isNsdelegated());
        $this->assertEquals(1000, $domains[0]->getEmailsMaxCount());
        $this->assertEquals(0, $domains[0]->getEmailsCount());
        $this->assertEquals(true, $domains[0]->isDkimReady());
        $this->assertEquals('http//logo.url', $domains[0]->getLogoUrl());
        $this->assertEquals('added', $domains[0]->getStage());
        $this->assertEquals(1, count($aliases));
        $this->assertEquals('test2.com', $aliases[0]);
    }

    public function testRegisterDomain()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"status": "domain-activate", "secrets": {"content": "c6ccecffb250", "name": "bbc1fc0d7a3a"}, "domain": "test.ru", "success": "ok", "stage": "owner-check"}')))
            ->new()
        ;

        $response = (new DomainManager(''))->setCurl($curl)->registerDomain('test.ru');
        $this->assertEquals('test.ru', $response->getDomain());
        $this->assertEquals('domain-activate', $response->getStatus());
        $this->assertEquals('owner-check', $response->getStage());
        $this->assertEquals('c6ccecffb250', $response->getSecrets()->getContent());
        $this->assertEquals('bbc1fc0d7a3a', $response->getSecrets()->getName());

    }
}
