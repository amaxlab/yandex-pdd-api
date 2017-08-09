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

use AmaxLab\YandexPddApi\Model\MailBoxModel;
use AmaxLab\YandexPddApi\Request\AbstractPaginationRequest;
use AmaxLab\YandexPddApi\Request\MailBox\AddMailBoxRequest;
use AmaxLab\YandexPddApi\Request\MailBox\EditMailBoxRequest;
use AmaxLab\YandexPddApi\Request\MailBox\GetMailBoxListRequest;
use AmaxLab\YandexPddApi\Request\MailBox\SetPasswordMailBoxRequest;
use AmaxLab\YandexPddApi\Response\MailBox\AddMailBoxResponse;
use AmaxLab\YandexPddApi\Response\MailBox\EditMailBoxResponse;
use AmaxLab\YandexPddApi\Response\MailBox\GetMailBoxListResponse;
use AmaxLab\YandexPddApi\Response\MailBox\SetPasswordMailBoxResponse;

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

    /**
     * @param string $domain
     * @param MailBoxModel $mailBoxModel
     *
     * @return EditMailBoxResponse|object
     */
    public function editMailBox($domain, MailBoxModel $mailBoxModel)
    {
        return $this->request((new EditMailBoxRequest($domain, $mailBoxModel)), 'AmaxLab\YandexPddApi\Response\MailBox\EditMailBoxResponse');
    }

    /**
     * @param string $domain
     * @param string $uid
     * @param string $password
     *
     * @return SetPasswordMailBoxResponse|object
     */
    public function setPasswordMailBox($domain, $uid, $password)
    {
        return $this->request((new SetPasswordMailBoxRequest($domain, $uid, $password)), 'AmaxLab\YandexPddApi\Response\MailBox\SetPasswordMailBoxResponse');
    }
}
