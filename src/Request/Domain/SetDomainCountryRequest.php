<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request\Domain;

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class SetDomainCountryRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domainName;

    /**
     * @var string
     */
    private $country;

    /**
     * @param string $domainName
     * @param $country
     */
    public function __construct($domainName, $country)
    {
        $this->domainName = $domainName;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/domain/settings/set_country';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return CurlClient::METHOD_POST;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return ['domain' => $this->domainName, 'country' => $this->country];
    }
}
