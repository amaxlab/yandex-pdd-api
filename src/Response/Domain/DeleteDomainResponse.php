<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Response\Domain;

use AmaxLab\YandexPddApi\Response\AbstractResponse;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DeleteDomainResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $domain;

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
}
