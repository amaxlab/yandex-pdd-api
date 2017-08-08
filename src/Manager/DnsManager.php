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

use AmaxLab\YandexPddApi\Model\DnsRecordModel;
use AmaxLab\YandexPddApi\Request\Dns\AddDnsRecordRequest;
use AmaxLab\YandexPddApi\Request\Dns\DeleteDnsRecordRequest;
use AmaxLab\YandexPddApi\Request\Dns\GetDnsRecordsRequest;
use AmaxLab\YandexPddApi\Response\Dns\AddDnsRecordResponse;
use AmaxLab\YandexPddApi\Response\Dns\DeleteDnsRecordResponse;
use AmaxLab\YandexPddApi\Response\Dns\GetDnsRecordsResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DnsManager extends AbstractManager
{
    /**
     * @param DnsRecordModel $record
     *
     * @return AddDnsRecordResponse|object
     */
    public function addRecord(DnsRecordModel $record)
    {
        return $this->request((new AddDnsRecordRequest($record)), 'AmaxLab\YandexPddApi\Response\Dns\AddDnsRecordResponse');
    }

    /**
     * @param string $domain
     *
     * @return GetDnsRecordsResponse|object
     */
    public function getRecords($domain)
    {
        return $this->request((new GetDnsRecordsRequest($domain)), 'AmaxLab\YandexPddApi\Response\Dns\GetDnsRecordsResponse');
    }

    /**
     * @param string $domain
     * @param int $recordId
     *
     * @return DeleteDnsRecordResponse|object
     */
    public function deleteRecord($domain, $recordId)
    {
        return $this->request((new DeleteDnsRecordRequest($domain, $recordId)), 'AmaxLab\YandexPddApi\Response\Dns\DeleteDnsRecordResponse');
    }
}
