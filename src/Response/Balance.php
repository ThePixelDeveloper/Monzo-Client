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
