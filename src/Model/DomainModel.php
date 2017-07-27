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
class DomainModel
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $fromRegistrar;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $wsTechnical;

    /**
     * @var bool
     */
    private $nodkim;

    /**
     * @var bool
     */
    private $logoEnabled;

    /**
     * @var bool
     */
    private $masterAdmin;

    /**
     * @var bool
     */
    private $nsdelegated;

    /**
     * @var int
     */
    private $emailsMaxCount;

    /**
     * @var int
     */
    private $emailsCount;

    /**
     * @var bool
     */
    private $dkimReady;

    /**
     * @var string
     */
    private $logoUrl;

    /**
     * @var string
     */
    private $stage;

    /**
     * @var string[]
     */
    private $aliases;

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
    public function getFromRegistrar()
    {
        return $this->fromRegistrar;
    }

    /**
     * @param string $fromRegistrar
     *
     * @return $this
     */
    public function setFromRegistrar($fromRegistrar)
    {
        $this->fromRegistrar = $fromRegistrar;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getWsTechnical()
    {
        return $this->wsTechnical;
    }

    /**
     * @param string $wsTechnical
     *
     * @return $this
     */
    public function setWsTechnical($wsTechnical)
    {
        $this->wsTechnical = $wsTechnical;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNodkim()
    {
        return $this->nodkim;
    }

    /**
     * @param bool $nodkim
     *
     * @return $this
     */
    public function setNodkim($nodkim)
    {
        $this->nodkim = $nodkim;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLogoEnabled()
    {
        return $this->logoEnabled;
    }

    /**
     * @param bool $logoEnabled
     *
     * @return $this
     */
    public function setLogoEnabled($logoEnabled)
    {
        $this->logoEnabled = $logoEnabled;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMasterAdmin()
    {
        return $this->masterAdmin;
    }

    /**
     * @param bool $masterAdmin
     *
     * @return $this
     */
    public function setMasterAdmin($masterAdmin)
    {
        $this->masterAdmin = $masterAdmin;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNsdelegated()
    {
        return $this->nsdelegated;
    }

    /**
     * @param bool $nsdelegated
     *
     * @return $this
     */
    public function setNsdelegated($nsdelegated)
    {
        $this->nsdelegated = $nsdelegated;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmailsMaxCount()
    {
        return $this->emailsMaxCount;
    }

    /**
     * @param int $emailsMaxCount
     *
     * @return $this
     */
    public function setEmailsMaxCount($emailsMaxCount)
    {
        $this->emailsMaxCount = $emailsMaxCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmailsCount()
    {
        return $this->emailsCount;
    }

    /**
     * @param int $emailsCount
     *
     * @return $this
     */
    public function setEmailsCount($emailsCount)
    {
        $this->emailsCount = $emailsCount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDkimReady()
    {
        return $this->dkimReady;
    }

    /**
     * @param bool $dkimReady
     *
     * @return $this
     */
    public function setDkimReady($dkimReady)
    {
        $this->dkimReady = $dkimReady;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     *
     * @return $this
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

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
     * @return string[]
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param string[] $aliases
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;

        return $this;
    }
}
