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

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Model\MailBoxModel;
use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class EditMailBoxRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var MailBoxModel
     */
    private $mailBox;

    /**
     * @param string $domain
     * @param MailBoxModel $mailBox
     */
    public function __construct($domain, MailBoxModel $mailBox)
    {
        $this->domain = $domain;
        $this->mailBox = $mailBox;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/email/edit';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return CurlClient::METHOD_POST;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        $record = [
            'domain' => $this->domain,
            'login' => $this->mailBox->getLogin(),
            'uid' => $this->mailBox->getUid(),
            'iname' => $this->mailBox->getIName(),
            'fname' => $this->mailBox->getFName(),
            'enabled' => $this->mailBox->getEnabled(),
            'birth_date' => $this->mailBox->getBirthDate(),
            'sex' => $this->mailBox->getSex(),
            'hintq' => $this->mailBox->getHintq(),
            'hinta' => $this->mailBox->getHinta(),
        ];

        if ($this->mailBox->getPassword()) {
            $record['password'] = $this->mailBox->getPassword();
        }

        return $record;
    }
}
