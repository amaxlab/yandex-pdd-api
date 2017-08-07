<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Response\Dns;

use AmaxLab\YandexPddApi\Response\AbstractResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class GetDnsRecordsResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var \AmaxLab\YandexPddApi\Model\DnsRecordModel[]
     */
    private $records;

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
     * @return \AmaxLab\YandexPddApi\Model\DnsRecordModel[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param \AmaxLab\YandexPddApi\Model\DnsRecordModel[] $records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->records = $records;

        return $this;
    }
}
