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
use AmaxLab\YandexPddApi\Response\GetDomainsListResponse;

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
        return $this->request((new GetDomainsListRequest()), 'AmaxLab\YandexPddApi\Response\GetDomainsListResponse');
    }
}
