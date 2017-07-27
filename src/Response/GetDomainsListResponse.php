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
class GetDomainsListResponse extends AbstractPaginationResponse
{
    /**
     * @var \AmaxLab\YandexPddApi\Model\DomainModel[]
     */
    private $domains;

    /**
     * @return \AmaxLab\YandexPddApi\Model\DomainModel[]
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * @param \AmaxLab\YandexPddApi\Model\DomainModel[] $domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;

        return $this;
    }
}
