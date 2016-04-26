<?php

namespace Thepixeldeveloper\Mondo\Response;

use JMS\Serializer\Annotation as JMS;
use Thepixeldeveloper\Mondo\Response\Merchant\Address;

/**
 * Class Merchant
 *
 * @package Thepixeldeveloper\Mondo\Response
 */
class Merchant
{
    /**
     * Address.
     *
     * @var Address
     * @JMS\Type("Thepixeldeveloper\Mondo\Response\Merchant\Address")
     */
    protected $address;

    /**
     * Created date.
     *
     * @var \DateTime
     * @JMS\Type("DateTime")
     */
    protected $created;

    /**
     * Group Id.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $groupId;

    /**
     * Id.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $id;

    /**
     * Logo.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $logo;

    /**
     * Emoji.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $emoji;

    /**
     * Name.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * Category.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $category;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
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
    public function getGroupId()
    {
        return $this->groupId;
    }

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
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return string
     */
    public function getEmoji()
    {
        return $this->emoji;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}
