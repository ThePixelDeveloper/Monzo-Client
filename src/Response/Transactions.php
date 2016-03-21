<?php

namespace Thepixeldeveloper\Mondo\Response;

use JMS\Serializer\Annotation as JMS;
use Thepixeldeveloper\Mondo\Response\Transactions\Transaction;

/**
 * Class Transaction
 *
 * @package Thepixeldeveloper\Mondo\Response
 */
class Transactions
{
    /**
     * Transactions
     *
     * @var Transaction[]
     * @JMS\Type("array<\Thepixeldeveloper\Mondo\Response\Transactions\Transaction>")
     */
    protected $transactions = [];

    /**
     * @return Transactions\Transaction[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }
}
