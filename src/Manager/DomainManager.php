<?php


namespace AmaxLab\YandexPddApi\Manager;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class DomainManager
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
}
