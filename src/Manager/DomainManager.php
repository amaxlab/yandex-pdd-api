<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Manager;

use AmaxLab\YandexPddApi\Request\Domain\DeleteDomainRequest;
use AmaxLab\YandexPddApi\Request\Domain\GetDomainSettingRequest;
use AmaxLab\YandexPddApi\Request\Domain\GetDomainsListRequest;
use AmaxLab\YandexPddApi\Request\Domain\GetDomainRegistrationStatusRequest;
use AmaxLab\YandexPddApi\Request\Domain\RegisterDomainRequest;
use AmaxLab\YandexPddApi\Response\Domain\GetDomainSettingsResponse;
use AmaxLab\YandexPddApi\Response\Domain\GetDomainsListResponse;
use AmaxLab\YandexPddApi\Response\Domain\GetDomainRegistrationStatusResponse;
use AmaxLab\YandexPddApi\Response\Domain\RegisterDomainResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DomainManager extends AbstractManager
{
    /**
     * @return GetDomainsListResponse|object
     */
    public function getDomainList()
    {
        return $this->request(new GetDomainsListRequest(), 'AmaxLab\YandexPddApi\Response\Domain\GetDomainsListResponse');
    }

    /**
     * @param string $domainName
     *
     * @return RegisterDomainResponse|object
     */
    public function registerDomain($domainName)
    {
        return $this->request(new RegisterDomainRequest($domainName), 'AmaxLab\YandexPddApi\Response\Domain\RegisterDomainResponse');
    }

    /**
     * @param string $domainName
     *
     * @return GetDomainRegistrationStatusResponse|object
     */
    public function getRegistrationStatusDomain($domainName)
    {
        return $this->request(new GetDomainRegistrationStatusRequest($domainName), 'AmaxLab\YandexPddApi\Response\Domain\GetDomainRegistrationStatusResponse');
    }

    /**
     * @param string $domainName
     *
     * @return GetDomainSettingsResponse|object
     */
    public function getDomainSettings($domainName)
    {
        return $this->request(new GetDomainSettingRequest($domainName), 'AmaxLab\YandexPddApi\Response\Domain\GetDomainSettingsResponse');
    }

    /**
     * @param string $domainName
     *
     * @return RegisterDomainResponse|object
     */
    public function deleteDomain($domainName)
    {
        return $this->request(new DeleteDomainRequest($domainName), 'AmaxLab\YandexPddApi\Response\Domain\DeleteDomainResponse');
    }
}
