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

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Model\MailBoxModel;
use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class GetMailCountInMailBoxRequest extends AbstractRequest
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
    public function getUri()
    {
        return '/email/counters';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return CurlClient::METHOD_GET;
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
