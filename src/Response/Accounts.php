<?php

namespace Thepixeldeveloper\Mondo\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Accounts
 *
 * @package Thepixeldeveloper\Mondo\Response
 */
class Accounts
{
    /**
     * @var Accounts\Account[]
     * @JMS\Type("array<Thepixeldeveloper\Mondo\Response\Account>")
     */
    protected $accounts = [];

    /**
     * @return Accounts\Account[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }
}
