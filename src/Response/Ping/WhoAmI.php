<?php

namespace Thepixeldeveloper\Mondo\Response\Ping;

use JMS\Serializer\Annotation as JMS;

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
     * @JMS\Type("boolean")
     */
    protected $authenticated;

    /**
     * Client id.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $clientId;

    /**
     * User id.
     *
     * @var string
     * @JMS\Type("string")
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
