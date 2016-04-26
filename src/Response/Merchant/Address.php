<?php

namespace Thepixeldeveloper\Mondo\Response\Merchant;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Address
 *
 * @package Thepixeldeveloper\Mondo\Response\Merchant
 */
class Address
{
    /**
     * Address.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $address;

    /**
     * City.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $city;

    /**
     * Country.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $country;

    /**
     * Latitude.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $lat;

    /**
     * Longitude.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $lon;

    /**
     * Post code.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $postCode;

    /**
     * Region.
     *
     * @var string
     * @JMS\Type("string")
     */
    protected $region;

    /**
     * Address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * City.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Latitude.
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Longitude.
     *
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Post code.
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Region.
     * 
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
}
