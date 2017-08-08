<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Response\MailBox;

use AmaxLab\YandexPddApi\Response\AbstractPaginationResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class GetMailBoxListResponse extends AbstractPaginationResponse
{
    /**
     * @var \AmaxLab\YandexPddApi\Model\MailBoxModel[]
     */
    private $accounts;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var int
     */
    private $boxLimit;

    /**
     * @return \AmaxLab\YandexPddApi\Model\MailBoxModel[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param \AmaxLab\YandexPddApi\Model\MailBoxModel[] $accounts
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return int
     */
    public function getBoxLimit()
    {
        return $this->boxLimit;
    }

    /**
     * @param int $boxLimit
     *
     * @return $this
     */
    public function setBoxLimit($boxLimit)
    {
        $this->boxLimit = $boxLimit;

        return $this;
    }
}
