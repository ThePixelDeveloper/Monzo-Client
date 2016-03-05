<?php

namespace Thepixeldeveloper\Mondo\Response\Transactions;

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
     */
    protected $id;

    /**
     * Created time.
     *
     * @var \DateTime
     */
    protected $created;

    /**
     * Description.
     *
     * @var string
     */
    protected $description;

    /**
     * Amount.
     *
     * @var integer
     */
    protected $amount;

    /**
     * Currency.
     *
     * @var string
     */
    protected $currency;

    /**
     * Merchant.
     *
     * @var string
     */
    protected $merchant;

    /**
     * Notes.
     *
     * @var string
     */
    protected $notes;

    /**
     * Metadata.
     *
     * @var array
     */
    protected $metadata = [];

    /**
     * Balance.
     *
     * @var integer
     */
    protected $accountBalance;

    /**
     * Attachments.
     *
     * @var array
     */
    protected $attachments = [];

    /**
     * Category.
     *
     * @var string
     */
    protected $category;

    /**
     * Is load.
     *
     * @var boolean
     */
    protected $isLoad;

    /**
     * Settled.
     *
     * @var \DateTime
     */
    protected $settled;

    /**
     * Local amount.
     *
     * @var integer
     */
    protected $localAmount;

    /**
     * Local currency.
     *
     * @var integer
     */
    protected $localCurrency;

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
        return new \DateTime();
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
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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
        return new \DateTime();
    }

    /**
     * @return int
     */
    public function getLocalAmount()
    {
        return $this->localAmount;
    }

    /**
     * @return int
     */
    public function getLocalCurrency()
    {
        return $this->localCurrency;
    }
}
