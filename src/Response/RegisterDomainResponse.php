<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Response;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class RegisterDomainResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $stage;

    /**
     * @var \AmaxLab\YandexPddApi\Model\SecretsModel
     */
    private $secrets;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param string $stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * @return \AmaxLab\YandexPddApi\Model\SecretsModel
     */
    public function getSecrets()
    {
        return $this->secrets;
    }

    /**
     * @param \AmaxLab\YandexPddApi\Model\SecretsModel $secrets
     *
     * @return $this
     */
    public function setSecrets($secrets)
    {
        $this->secrets = $secrets;

        return $this;
    }
}
