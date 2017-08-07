<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request\Dns;

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class GetDnsRecordsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @param string $domain
     */
    public function __construct($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/dns/list';
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
        ];
    }
}
