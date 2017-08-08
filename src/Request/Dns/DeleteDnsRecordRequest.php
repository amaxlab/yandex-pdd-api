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
class DeleteDnsRecordRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var int
     */
    private $recordId;

    /**
     * @param string $domain
     * @param int $recordId
     */
    public function __construct($domain, $recordId)
    {
        $this->domain = $domain;
        $this->recordId = $recordId;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/dns/del';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return CurlClient::METHOD_POST;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return [
            'domain' => $this->domain,
            'record_id' => $this->recordId,
        ];
    }
}
