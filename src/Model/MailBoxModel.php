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
class MailBoxModel
{
    CONST SEX_UNKNOWN = 0;

    CONST SEX_MALE = 1;

    CONST SEX_FEMALE = 2;

    /**
     * @var string
     */
    private $login;

    /**
     * @var int
     */
    private $uid;

    /**
     * @var string
     */
    private $enabled;

    /**
     * @var string
     */
    private $fio;

    /**
     * @var string[]
     */
    private $aliases;

    /**
     * @var string
     */
    private $fName;

    /**
     * @var string
     */
    private $iName;

    /**
     * @var string
     */
    private $birthDate;

    /**
     * @var int
     */
    private $sex;

    /**
     * @var string
     */
    private $hintq;

    /**
     * @var string
     */
    private $hinta;

    /**
     * @var string
     */
    private $ready;

    /**
     * @var string
     */
    private $mailList;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param string $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param string $fio
     *
     * @return $this
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

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

    /**
     * @return string
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @param string $fName
     *
     * @return $this
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
        return $this;
    }

    /**
     * @return string
     */
    public function getIName()
    {
        return $this->iName;
    }

    /**
     * @param string $iName
     *
     * @return $this
     */
    public function setIName($iName)
    {
        $this->iName = $iName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     *
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     *
     * @return $this
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return string
     */
    public function getHintq()
    {
        return $this->hintq;
    }

    /**
     * @param string $hintq
     *
     * @return $this
     */
    public function setHintq($hintq)
    {
        $this->hintq = $hintq;

        return $this;
    }

    /**
     * @param string $hinta
     *
     * @return $this
     */
    public function setHinta($hinta)
    {
        $this->hinta = $hinta;

        return $this;
    }

    /**
     * @return string
     */
    public function getReady()
    {
        return $this->ready;
    }

    /**
     * @param string $ready
     *
     * @return $this
     */
    public function setReady($ready)
    {
        $this->ready = $ready;

        return $this;
    }

    /**
     * @return string
     */
    public function getMailList()
    {
        return $this->mailList;
    }

    /**
     * @param string $mailList
     *
     * @return $this
     */
    public function setMailList($mailList)
    {
        $this->mailList = $mailList;

        return $this;
    }
}
