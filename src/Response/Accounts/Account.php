<?php

namespace Thepixeldeveloper\Mondo\Response\Accounts;

use JMS\Serializer\Annotation as JMS;

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
     * @JMS\Type("string")
     */
    protected $id;

    /**
     * Description.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $description;

    /**
     * Created date.
     *
     * @var \DateTime
     * @JMS\Type("DateTime")
     */
    protected $created;

    /**
     * Account id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Created date.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
