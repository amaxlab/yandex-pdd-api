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
     * @var bool
     */
    private $isRegistrar;

    /**
     * @var string
     */
    private $registrarOAuthToken;

    /**
     * @var DomainManager
     */
    private $domainManager;

    /**
     * @param string $token
     * @param bool $isRegistrar
     * @param string $registrarOAuthToken
     */
    public function __construct($token, $isRegistrar = false, $registrarOAuthToken = '')
    {
        $this->token = $token;
        $this->isRegistrar = $isRegistrar;
        $this->registrarOAuthToken = $registrarOAuthToken;
    }

    /**
     * @return DomainManager
     */
    public function getDomainManager()
    {
        if (!$this->domainManager) {
            $this->domainManager = new DomainManager($this->token, $this->isRegistrar, $this->registrarOAuthToken);
        }

        return $this->domainManager;
    }
}
