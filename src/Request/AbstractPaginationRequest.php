<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
abstract class AbstractPaginationRequest extends AbstractRequest
{
    const DEFAULT_ON_PAGE = 20;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $onPage;

    /**
     * @param int $page
     * @param int $onPage
     */
    public function __construct($page = 1, $onPage = self::DEFAULT_ON_PAGE)
    {
        $this->page = $page;
        $this->onPage = $onPage;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return [
            'page' => $this->page,
            'on_page' => $this->onPage,
        ];
    }
}
