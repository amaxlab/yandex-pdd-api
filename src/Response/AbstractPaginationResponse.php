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
abstract class AbstractPaginationResponse extends AbstractResponse
{
    /**
     * @var string
     */
    protected $direction;

    /**
     * @var int
     */
    protected $on_page;

    /**
     * @var int
     */
    protected $found;

    /**
     * @var int
     */
    protected $total;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var string
     */
    protected $order;

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return int
     */
    public function getOnPage()
    {
        return $this->on_page;
    }

    /**
     * @param int $on_page
     *
     * @return $this
     */
    public function setOnPage($on_page)
    {
        $this->on_page = $on_page;

        return $this;
    }

    /**
     * @return int
     */
    public function getFound()
    {
        return $this->found;
    }

    /**
     * @param int $found
     *
     * @return $this
     */
    public function setFound($found)
    {
        $this->found = $found;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
