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
class ResponseValidationException extends YandexPddApiException
{
    const STATUS_CODE_VALIDATION_MESSAGE = 'Response status code: %d not excepted';

    const JSON_CONTENT_VALIDATION_MESSAGE = 'Not valid json content from response';
}
