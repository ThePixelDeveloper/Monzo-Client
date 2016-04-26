<?php

namespace Thepixeldeveloper\Mondo\Response\Transactions;

use JMS\Serializer\Annotation as JMS;
use Thepixeldeveloper\Mondo\Response\Merchant;

/**
 * Class Transaction
 *
 * @package Thepixeldeveloper\Mondo\Response\Transactions
 */
class Transaction
{
    /**
     * Transaction id.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $id;

    /**
     * Created time.
     *
     * @var \DateTime
     * @JMS\Type("DateTime")
     */
    protected $created;

    /**
     * Description.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $description;

    /**
     * Amount.
     *
     * @var integer
     * @JMS\Type("integer")
     */
    protected $amount;

    /**
     * Currency.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $currency;

    /**
     * Merchant.
     *
     * @var Merchant
     * @JMS\Type("Thepixeldeveloper\Mondo\Response\Merchant")
     */
    protected $merchant;

    /**
     * Notes.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $notes;

    /**
     * Metadata.
     *
     * @var array
     * @JMS\Type("array")
     */
    protected $metadata = [];

    /**
     * Balance.
     *
     * @var integer
     * @JMS\Type("integer")
     */
    protected $accountBalance;

    /**
     * Is load.
     *
     * @var boolean
     * @JMS\Type("boolean")
     */
    protected $isLoad;

    /**
     * Settled.
     *
     * @var \DateTime
     * @JMS\Type("DateTime")
     */
    protected $settled;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @return int
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }

    /**
     * @return boolean
     */
    public function isIsLoad()
    {
        return $this->isLoad;
    }

    /**
     * @return \DateTime
     */
    public function getSettled()
    {
        return $this->settled;
    }
}
