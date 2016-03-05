<?php

namespace Thepixeldeveloper\Mondo\Response\Accounts;

/**
 * Class Account
 *
 * @package Thepixeldeveloper\Mondo\Response\Accounts
 */
class Account
{
    /**
     * Account id.
     *
     * @var string
     */
    protected $id;

    /**
     * Account number.
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * Sort code.
     *
     * @var integer
     */
    protected $sortCode;

    /**
     * Created date.
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return int
     */
    public function getSortCode()
    {
        return $this->sortCode;
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
}
