<?php

namespace Thepixeldeveloper\Mondo;

use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;

/**
 * Class Client
 *
 * @package Thepixeldeveloper\Mondo
 */
class Client implements ClientInterface
{
    /**
     * @var GuzzleClientInterface
     */
    protected $guzzleClient;

    /**
     * @var SerializerInterface
     */
    protected $serialiser;

    /**
     * Client constructor.
     *
     * @param GuzzleClientInterface $guzzleClient
     * @param SerializerInterface   $serialiser
     */
    public function __construct(GuzzleClientInterface $guzzleClient, SerializerInterface $serialiser)
    {
        $this->guzzleClient = $guzzleClient;
        $this->serialiser = $serialiser;
    }

    /**
     * @param string $uri
     * @param array  $options
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($uri, $options = [])
    {
        return $this->guzzleClient->request('GET', $uri, $options);
    }

    /**
     * @param ResponseInterface $data
     * @param string            $type
     *
     * @return object|array|scalar
     */
    public function deserializeResponse(ResponseInterface $data, $type)
    {
        return $this->serialiser->deserialize(
            $data->getBody()->getContents(),
            $type,
            'json'
        );
    }
}
