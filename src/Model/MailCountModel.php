<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Model;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class MailCountModel
{
    /**
     * @var int
     */
    private $unread;

    /**
     * @var int
     */
    private $new;

    /**
     * @return int
     */
    public function getUnread()
    {
        return $this->unread;
    }

    /**
     * @param int $unread
     *
     * @return $this
     */
    public function setUnread($unread)
    {
        $this->unread = $unread;

        return $this;
    }

    /**
     * @return int
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @param int $new
     *
     * @return $this
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }
}
