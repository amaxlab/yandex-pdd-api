<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi;

use AmaxLab\YandexPddApi\Manager\DomainManager;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class Client
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var DomainManager
     */
    private $domainManager;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @return DomainManager
     */
    public function getDomainManager()
    {
        if (!$this->domainManager) {
            $this->domainManager = new DomainManager($this->token);
        }

        return $this->domainManager;
    }
}
