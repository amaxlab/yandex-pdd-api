<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DnsRecordModel
{
    const TYPE_SRV = 'SRV';

    const TYPE_TXT = 'TXT';

    const TYPE_NS= 'NS';

    const TYPE_MX= 'MX';

    const TYPE_SOA= 'SOA';

    const TYPE_A= 'A';

    const TYPE_AAAA= 'AAAA';

    const TYPE_CNAME= 'CNAME';

    const TTL = 21600;

    const PRIORITY = 10;

    /**
     * @var int
     */
    private $recordId;

    /**
     * @var string
     */
    private $type = self::TYPE_A;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $fqdn;

    /**
     * @var int
     */
    private $refresh;

    /**
     * @var int
     */
    private $retry;

    /**
     * @var int
     */
    private $ttl = self::TTL;

    /**
     * @var int
     */
    private $minTtl;

    /**
     * @var string
     */
    private $subDomain;

    /**
     * @var string
     */
    private $content;

    /**
     * @var int
     */
    private $priority = self::PRIORITY;

    /**
     * @var int
     */
    private $expire;

    /**
     * @var string
     */
    private $adminMail;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var int
     */
    private $port;

    /**
     * @return int
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * @param int $recordId
     *
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

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
     * @return string
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * @param string $fqdn
     *
     * @return $this
     */
    public function setFqdn($fqdn)
    {
        $this->fqdn = $fqdn;

        return $this;
    }

    /**
     * @return int
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * @param int $retry
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->retry = $retry;

        return $this;
    }

    /**
     * @return int
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * @param int $refresh
     *
     * @return $this
     */
    public function setRefresh($refresh)
    {
        $this->refresh = $refresh;

        return $this;
    }

    /**
     * @return int
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @param int $ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinTtl()
    {
        return $this->minTtl;
    }

    /**
     * @param int $minTtl
     *
     * @return $this
     */
    public function setMinTtl($minTtl)
    {
        $this->minTtl = $minTtl;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubDomain()
    {
        return $this->subDomain;
    }

    /**
     * @param string $subDomain
     *
     * @return $this
     */
    public function setSubDomain($subDomain)
    {
        $this->subDomain = $subDomain;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * @param int $expire
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdminMail()
    {
        return $this->adminMail;
    }

    /**
     * @param string $adminMail
     *
     * @return $this
     */
    public function setAdminMail($adminMail)
    {
        $this->adminMail = $adminMail;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }
}
