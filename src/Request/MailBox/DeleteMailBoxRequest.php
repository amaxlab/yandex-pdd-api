<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request\MailBox;

use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DeleteMailBoxRequest extends AbstractRequest
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
     * @param string $domain
     * @param string $login
     */
    public function __construct($domain, $login)
    {
        $this->domain = $domain;
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD_POST;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/email/del';
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return [
            'domain' => $this->domain,
            'login' => $this->login,
        ];
    }
}
