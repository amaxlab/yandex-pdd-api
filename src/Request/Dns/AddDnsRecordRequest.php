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
use AmaxLab\YandexPddApi\Model\DnsRecordModel;
use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class AddDnsRecordRequest extends AbstractRequest
{
    /**
     * @var DnsRecordModel
     */
    private $record;

    /**
     * @param DnsRecordModel $record
     */
    public function __construct(DnsRecordModel $record)
    {
        $this->record = $record;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'dns/add';
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
            'domain' => $this->record->getDomain(),
            'type' => $this->record->getType(),
            'admin_mail' => $this->record->getAdminEmail(),
            'content' => $this->record->getContent(),
            'priority' => $this->record->getPriority(),
            'weight' => $this->record->getWeight(),
            'port' => $this->record->getPort(),
            'target' => $this->record->getTarget(),
            'subdomain' => $this->record->getSubDomain(),
            'ttl' => $this->record->getTtl(),
        ];
    }
}
