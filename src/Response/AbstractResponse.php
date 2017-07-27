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
abstract class AbstractResponse implements ResponseInterface
{
    const SUCCESS_OK = 'ok';

    const SUCCESS_ERROR = 'error';

    /**
     * @var string
     */
    protected $success;

    /**
     * @var string
     */
    protected $error;

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param string $success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
