<?php

namespace Thepixeldeveloper\Mondo\Response;

use JMS\Serializer\Annotation as JMS;

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
     * @JMS\Type("integer")
     */
    protected $balance;

    /**
     * Currency.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $currency;

    /**
     * Spend today.
     *
     * @var integer
     * @JMS\Type("integer")
     */
    protected $spendToday;

    /**
     * Balance.
     * 
     * @return integer
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Spend today.
     *
     * @return integer
     */
    public function getSpendToday()
    {
        return $this->spendToday;
    }
}
