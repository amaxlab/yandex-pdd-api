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
class GetDomainRegistrationStatusResponse extends RegisterDomainResponse
{
    /**
     * @var \DateTime
     */
    private $lastCheck;

    /**
     * @var \DateTime
     */
    private $nextCheck;

    /**
     * @var string
     */
    private $checkResults;

    /**
     * @return \DateTime
     */
    public function getLastCheck()
    {
        return $this->lastCheck;
    }

    /**
     * @param \DateTime $lastCheck
     *
     * @return $this
     */
    public function setLastCheck($lastCheck)
    {
        $this->lastCheck = $lastCheck;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextCheck()
    {
        return $this->nextCheck;
    }

    /**
     * @param \DateTime $nextCheck
     *
     * @return $this
     */
    public function setNextCheck($nextCheck)
    {
        $this->nextCheck = $nextCheck;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckResults()
    {
        return $this->checkResults;
    }

    /**
     * @param string $checkResults
     *
     * @return $this
     */
    public function setCheckResults($checkResults)
    {
        $this->checkResults = $checkResults;

        return $this;
    }
}
