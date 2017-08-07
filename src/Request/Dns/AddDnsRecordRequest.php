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
class AddDnsRecordRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $adminMail;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var string
     */
    private $port;

    /**
     * @var string
     */
    private $target;

    /**
     * @var string
     */
    private $subDomain;

    /**
     * @var int
     */
    private $ttl;

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
     */
    public function __construct($domain, $type, $content, $adminMail = '', $priority = 10, $weight = 0, $port = '', $target = '', $subDomain = '@', $ttl = 21600)
    {
        $this->domain = $domain;
        $this->type = $type;
        $this->content = $content;
        $this->adminMail = $adminMail;
        $this->priority = $priority;
        $this->weight = $weight;
        $this->port = $port;
        $this->target = $target;
        $this->subDomain = $subDomain;
        $this->ttl = $ttl;
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
            'domain' => $this->domain,
            'type' => $this->type,
            'admin_mail' => $this->adminMail,
            'content' => $this->content,
            'priority' => $this->priority,
            'weight' => $this->weight,
            'port' => $this->port,
            'target' => $this->target,
            'subdomain' => $this->subDomain,
            'ttl' => $this->ttl,
        ];
    }
}
