<?php

namespace Thepixeldeveloper\Mondo\Response\Ping;

/**
 * Class WhoAmI
 *
 * @package Thepixeldeveloper\Mondo\Response\Ping
 */
class WhoAmI
{
    /**
     * Client authenticated?
     *
     * @var boolean
     */
    protected $authenticated;

    /**
     * Client id.
     *
     * @var string
     */
    protected $clientId;

    /**
     * User id.
     *
     * @var string
     */
    protected $userId;

    /**
     * @return boolean
     */
    public function isAuthenticated()
    {
        return (bool) $this->authenticated;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
