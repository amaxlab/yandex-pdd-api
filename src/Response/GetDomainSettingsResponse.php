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
class GetDomainSettingsResponse extends AbstractResponse
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
     * @var bool
     */
    private $imapEnabled;

    /**
     * @var string
     */
    private $defaultTheme;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $wsTechnical;

    /**
     * @var string
     */
    private $canUsersChangePassword;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var int
     */
    private $defaultUid;

    /**
     * @var string
     */
    private $masterAdmin;

    /**
     * @var string
     */
    private $rosterEnabled;

    /**
     * @var bool
     */
    private $popEnabled;

    /**
     * @var string
     */
    private $delegated;

    /**
     * @var string
     */
    private $logoUrl;

    /**
     * @var string
     */
    private $stage;

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
    public function getCanUsersChangePassword()
    {
        return $this->canUsersChangePassword;
    }

    /**
     * @param string $canUsersChangePassword
     *
     * @return $this
     */
    public function setCanUsersChangePassword($canUsersChangePassword)
    {
        $this->canUsersChangePassword = $canUsersChangePassword;

        return $this;
    }

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
     * @return bool
     */
    public function isImapEnabled()
    {
        return $this->imapEnabled;
    }

    /**
     * @param bool $imapEnabled
     *
     * @return $this
     */
    public function setImapEnabled($imapEnabled)
    {
        $this->imapEnabled = $imapEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTheme()
    {
        return $this->defaultTheme;
    }

    /**
     * @param string $defaultTheme
     *
     * @return $this
     */
    public function setDefaultTheme($defaultTheme)
    {
        $this->defaultTheme = $defaultTheme;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

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
     * @return int
     */
    public function getDefaultUid()
    {
        return $this->defaultUid;
    }

    /**
     * @param int $defaultUid
     *
     * @return $this
     */
    public function setDefaultUid($defaultUid)
    {
        $this->defaultUid = $defaultUid;

        return $this;
    }

    /**
     * @return string
     */
    public function getMasterAdmin()
    {
        return $this->masterAdmin;
    }

    /**
     * @param string $masterAdmin
     *
     * @return $this
     */
    public function setMasterAdmin($masterAdmin)
    {
        $this->masterAdmin = $masterAdmin;

        return $this;
    }

    /**
     * @return string
     */
    public function getRosterEnabled()
    {
        return $this->rosterEnabled;
    }

    /**
     * @param string $rosterEnabled
     *
     * @return $this
     */
    public function setRosterEnabled($rosterEnabled)
    {
        $this->rosterEnabled = $rosterEnabled;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPopEnabled()
    {
        return $this->popEnabled;
    }

    /**
     * @param bool $popEnabled
     *
     * @return $this
     */
    public function setPopEnabled($popEnabled)
    {
        $this->popEnabled = $popEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getDelegated()
    {
        return $this->delegated;
    }

    /**
     * @param string $delegated
     *
     * @return $this
     */
    public function setDelegated($delegated)
    {
        $this->delegated = $delegated;

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
}
