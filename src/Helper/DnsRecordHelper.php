<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Helper;

use AmaxLab\YandexPddApi\Model\DnsRecordModel;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DnsRecordHelper
{
    /**
     * @param string $domain
     * @param string $name
     * @param string $ipAddress
     * @param int $ttl
     *
     * @return DnsRecordModel
     */
    public static function createARecord($domain, $name, $ipAddress, $ttl = DnsRecordModel::TTL)
    {
        return (new DnsRecordModel())
            ->setDomain($domain)
            ->setSubDomain($name)
            ->setFqdn($name.'.'.$domain)
            ->setContent($ipAddress)
            ->setTtl($ttl)
            ->setType(DnsRecordModel::TYPE_A)
        ;
    }

    /**
     * @param string $domain
     * @param string $name
     * @param string $ipAddress
     * @param int $ttl
     *
     * @return DnsRecordModel
     */
    public static function createAAAARecord($domain, $name, $ipAddress, $ttl = DnsRecordModel::TTL)
    {
        return (new DnsRecordModel())
            ->setDomain($domain)
            ->setSubDomain($name)
            ->setFqdn($name.'.'.$domain)
            ->setContent($ipAddress)
            ->setTtl($ttl)
            ->setType(DnsRecordModel::TYPE_AAAA)
            ;
    }

    /**
     * @param string $domain
     * @param string $name
     * @param string $alias
     * @param int $ttl
     *
     * @return DnsRecordModel
     */
    public static function createCNAMERecord($domain, $name, $alias, $ttl = DnsRecordModel::TTL)
    {
        return (new DnsRecordModel())
            ->setDomain($domain)
            ->setSubDomain($name)
            ->setFqdn($name.'.'.$domain)
            ->setContent($alias)
            ->setTtl($ttl)
            ->setType(DnsRecordModel::TYPE_CNAME)
            ;
    }
}
