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
class GetMailCountInMailBoxListResponse extends AbstractPaginationResponse
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $uid;

    /**
     * @var \AmaxLab\YandexPddApi\Model\MailCountModel
     */
    private $counters;

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
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @return \AmaxLab\YandexPddApi\Model\MailCountModel
     */
    public function getCounters()
    {
        return $this->counters;
    }

    /**
     * @param \AmaxLab\YandexPddApi\Model\MailCountModel $counters
     *
     * @return $this
     */
    public function setCounters($counters)
    {
        $this->counters = $counters;

        return $this;
    }
}
