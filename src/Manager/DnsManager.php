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

use AmaxLab\YandexPddApi\Request\Dns\AddDnsRecordRequest;
use AmaxLab\YandexPddApi\Request\Dns\GetDnsRecordsRequest;
use AmaxLab\YandexPddApi\Response\Dns\AddDnsRecordResponse;
use AmaxLab\YandexPddApi\Response\Dns\GetDnsRecordsResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DnsManager extends AbstractManager
{
    /**
     * @param string $domain
     * @param string $type
     * @param string $content
     * @param string $adminMail
     * @param int $priority
     * @param int $weight
     * @param string $port
     * @param string $target
     * @param string $subDomain
     * @param int $ttl
     *
     * @return AddDnsRecordResponse|object
     */
    public function addRecord($domain, $type, $content, $adminMail = '', $priority = 10, $weight = 0, $port = '', $target = '', $subDomain = '@', $ttl = 21600)
    {
        return $this->request((new AddDnsRecordRequest($domain, $type, $content, $adminMail, $priority, $weight, $port, $target, $subDomain, $ttl)), 'AmaxLab\YandexPddApi\Response\Dns\AddDnsRecordResponse');
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
}
