<?php

namespace Thepixeldeveloper\Mondo;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;

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
     * @return array|\JMS\Serializer\scalar|object
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
