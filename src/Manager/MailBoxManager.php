<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Manager;

use AmaxLab\YandexPddApi\Request\AbstractPaginationRequest;
use AmaxLab\YandexPddApi\Request\MailBox\AddMailBoxRequest;
use AmaxLab\YandexPddApi\Request\MailBox\GetMailBoxListRequest;
use AmaxLab\YandexPddApi\Response\MailBox\AddMailBoxResponse;
use AmaxLab\YandexPddApi\Response\MailBox\GetMailBoxListResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class MailBoxManager extends AbstractManager
{
    /**
     * @param string $domain
     * @param string $login
     * @param string $password
     *
     * @return AddMailBoxResponse|Object
     */
    public function addMailBox($domain, $login, $password)
    {
        return $this->request((new AddMailBoxRequest($domain, $login, $password)), 'AmaxLab\YandexPddApi\Response\MailBox\AddMailBoxResponse');
    }

    /**
     * @param string $domain
     * @param int $page
     * @param int $onPage
     *
     * @return GetMailBoxListResponse|object
     */
    public function getMailBoxes($domain, $page = 1, $onPage = AbstractPaginationRequest::DEFAULT_ON_PAGE)
    {
        return $this->request((new GetMailBoxListRequest($domain, $page, $onPage)), 'AmaxLab\YandexPddApi\Response\MailBox\GetMailBoxListResponse');
    }
}
