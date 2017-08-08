<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request\MailBox;

use AmaxLab\YandexPddApi\Request\AbstractPaginationRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class GetMailBoxListRequest extends AbstractPaginationRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @param string $domain
     * @param int $page
     * @param int $onPage
     */
    public function __construct($domain, $page = 1, $onPage = self::DEFAULT_ON_PAGE)
    {
        parent::__construct($page, $onPage);

        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/email/list';
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return array_merge(parent::getParams(), ['domain' => $this->domain]);
    }
}
