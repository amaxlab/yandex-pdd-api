<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Exception;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class RequestValidationException extends YandexPddApiException
{
    const METHOD_VALIDATION_MESSAGE = 'Method %s not allowed';

    const PARAMS_VALIDATION_MESSAGE = 'Params must be array';
}
