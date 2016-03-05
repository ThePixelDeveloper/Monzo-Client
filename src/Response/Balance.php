<?php

namespace Thepixeldeveloper\Mondo\Response;

/**
 * Class Balance
 *
 * @package Thepixeldeveloper\Mondo\Response
 */
class Balance
{
    /**
     * Balance.
     *
     * @var integer
     */
    protected $balance;

    /**
     * Currency.
     *
     * @var string
     */
    protected $currency;

    /**
     * Spend today.
     *
     * @var integer
     */
    protected $spendToday;

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getSpendToday()
    {
        return $this->spendToday;
    }
}
