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

use AmaxLab\YandexPddApi\Manager\AbstractManager;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class YandexResponseValidationException extends ResponseValidationException
{
    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $messages = [
            'error_message_not_found' => 'Unknown error, please contact to developer',
            'unknown' => 'Unknown server error, please try again later',
            'no_token' => 'No token set',
            'no_domain' => 'No domain ser',
            'no_ip' => 'No ip set',
            'bad_domain' => 'Bad domain name (not equal RFC)',
            'prohibited' => 'Denied domain name',
            'bad_token' => 'Bad token',
            'bad_login' => 'Bad login',
            'bad_passwd' => 'Bad password',
            'no_auth' => AbstractManager::PDD_TOKEN_HEADER.' not set in the headers',
            'not_allowed' => 'User has not allowed this operation',
            'blocked' => 'Domain is blocked',
            'occupied' => 'Domain name already used',
            'domain_limit_reached' => 'Reached domain limit 50',
        ];

        if (!$messages[$name]) {
            $name = 'error_message_not_found';
        }

        parent::__construct($messages[$name]);
    }
}
