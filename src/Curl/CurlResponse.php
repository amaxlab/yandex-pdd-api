<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Curl;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class CurlResponse
{
    const STATUS_CODE_OK = 200;

    /**
     * @var string
     */
    private $content;

    /**
     * @var int
     */
    private $statusCode;

    /**
     * @param int $statusCode
     * @param string $content
     */
    public function __construct($statusCode, $content)
    {
        //print $content;
        $this->statusCode = $statusCode;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return object
     */
    public function getJson()
    {
        return json_decode($this->getContent());
    }
}
