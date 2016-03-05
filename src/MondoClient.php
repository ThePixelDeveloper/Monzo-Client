<?php

namespace Thepixeldeveloper\Mondo;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;

/**
 * Class MondoClient
 *
 * @package Thepixeldeveloper\Mondo
 */
class MondoClient implements MondoClientInterface
{
    /**
     * @var ClientInterface
     */
    protected $guzzleClient;

    /**
     * @var SerializerInterface
     */
    protected $serialiser;

    /**
     * MondoClient constructor.
     *
     * @param ClientInterface     $guzzleClient
     * @param SerializerInterface $serialiser
     */
    public function __construct(ClientInterface $guzzleClient, SerializerInterface $serialiser)
    {
        $this->guzzleClient = $guzzleClient;
        $this->serialiser = $serialiser;
    }

    /**
     * @param string $uri
     * @param array  $options
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($uri, $options = [])
    {
        return $this->guzzleClient->requestAsync('GET', $uri, $options);
    }
}
