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

use AmaxLab\YandexPddApi\Request\GetDomainsListRequest;
use AmaxLab\YandexPddApi\Response\GetDomainsResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DomainManager extends AbstractManager
{
    /**
     * @return GetDomainsResponse|object
     */
    public function getDomainList()
    {
        $response = $this->request((new GetDomainsListRequest()));

        $mapper = new \JsonMapper();
        $mapper->bIgnoreVisibility = true;
        $response = $mapper->map($response->getJson(), new GetDomainsResponse());

        return $response;
    }
}
