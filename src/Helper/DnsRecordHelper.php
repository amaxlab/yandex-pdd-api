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
     * @param $domain
     * @param $name
     * @param $ipAddress
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
}
