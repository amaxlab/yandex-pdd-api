<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request\Dns;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class EditDnsRecordRequest extends AddDnsRecordRequest
{
    /**
     * @return string
     */
    public function getUri()
    {
        return '/dns/edit';
    }
    /**
     * @return array
     */
    public function getParams()
    {
        return array_merge(parent::getParams(), ['record_id' => $this->record->getRecordId()]);
    }
}
