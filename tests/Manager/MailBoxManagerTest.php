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
use AmaxLab\YandexPddApi\Manager\MailBoxManager;
use AmaxLab\YandexPddApi\Model\MailBoxModel;
use Xpmock\TestCaseTrait;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class MailBoxManagerTest extends \PHPUnit_Framework_TestCase
{
    use TestCaseTrait;

    public function testAddMailBox()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"success": "ok", "login": "test@domain.com", "uid": 123, "domain": "domain.com"}')))
            ->new()
        ;

        $response = (new MailBoxManager(''))->setCurl($curl)->addMailBox('domain.com', 'test', 'Qwerty123');

        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals('test@domain.com', $response->getLogin());
        $this->assertEquals(123, $response->getUid());
    }

    public function testGetMailBoxes()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"direction":"desc","on_page":20,"success":"ok","pages":1,"domain":"domain.com","order":"uid","box_limit":1000,"accounts":[{"uid":0,"iname":"","sex":null,"ready":"no","hintq":"","aliases":[],"enabled":"yes","maillist":"yes","fname":"","birth_date":null,"login":"admin@domain.com","fio":""},{"uid":1,"iname":"Test","sex":1,"ready":"yes","hintq":"Who are you?","aliases":["test2@domain.com"],"enabled":"yes","maillist":"no","fname":"Testov","birth_date":"1984-03-09","login":"test@domain.com","fio":"Testov Test"}],"offset":null,"found":2,"total":2,"page":1}')))
            ->new()
        ;

        $response = (new MailBoxManager(''))->setCurl($curl)->getMailBoxes('domain.com');
        $accounts = $response->getAccounts();
        $aliases = $accounts[1]->getAliases();

        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals(1000, $response->getBoxLimit());
        $this->assertEquals(2, count($accounts));
        $this->assertEquals(0, $accounts[0]->getUid());
        $this->assertEquals(null, $accounts[0]->getSex());
        $this->assertEquals('yes', $accounts[0]->getMailList());
        $this->assertEquals(1, $accounts[1]->getUid());
        $this->assertEquals('Test', $accounts[1]->getIName());
        $this->assertEquals(MailBoxModel::SEX_MALE, $accounts[1]->getSex());
        $this->assertEquals('yes', $accounts[1]->getReady());
        $this->assertEquals('Who are you?', $accounts[1]->getHintq());
        $this->assertEquals(1, count($aliases));
        $this->assertEquals('test2@domain.com', $aliases[0]);
        $this->assertEquals('yes', $accounts[1]->getEnabled());
        $this->assertEquals('no', $accounts[1]->getMailList());
        $this->assertEquals('Testov', $accounts[1]->getFName());
        $this->assertEquals('1984-03-09', $accounts[1]->getBirthDate());
        $this->assertEquals('test@domain.com', $accounts[1]->getLogin());
        $this->assertEquals('Testov Test', $accounts[1]->getFio());
    }

    public function testEditMailBox()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"account": {"uid": 123, "iname": "", "sex": null, "ready": "no", "hintq": "", "aliases": [], "enabled": "yes", "maillist": "no", "fname": "", "birth_date": null, "login": "test@amaxlab.ru", "fio": ""}, "success": "ok", "login": "test@domain.com", "uid": 123, "domain": "domain.com"}')))
            ->new()
        ;

        $response = (new MailBoxManager(''))->setCurl($curl)->editMailBox('domain.com', (new MailBoxModel())->setUid(123)->setPassword('secret')->setHinta('answer'));

        $this->assertEquals('domain.com', $response->getDomain());
    }

    public function testDeleteMailBox()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"login": "test@domain.com", "domain": "domain.com", "success": "ok"}')))
            ->new()
        ;

        $response = (new MailBoxManager(''))->setCurl($curl)->deleteMailBox('domain.com', 'test@domain.com');

        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals('test@domain.com', $response->getLogin());
    }

    public function testGetMailCountInMailBox()
    {
        $curl = $this->mock('AmaxLab\YandexPddApi\Curl\CurlClientInterface')
            ->request((new CurlResponse(200, '{"success": "ok", "login": "test@domain.com", "uid": 123, "domain": "domain.com", "counters": {"new": 1, "unread": 2}}')))
            ->new()
        ;

        $response = (new MailBoxManager(''))->setCurl($curl)->getMailCountInMailBox('domain.com', 'test@domain.com');

        $this->assertEquals('domain.com', $response->getDomain());
        $this->assertEquals('test@domain.com', $response->getLogin());
        $this->assertEquals('123', $response->getUid());
        $this->assertEquals(1, $response->getCounters()->getNew());
        $this->assertEquals(2, $response->getCounters()->getUnread());
    }
}
