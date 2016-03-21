<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\ClientInterface;
use Thepixeldeveloper\Mondo\Response;

/**
 * Class Ping
 *
 * @package Thepixeldeveloper\Mondo\Client
 */
class Ping
{
    /**
     * Mondo client.
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * Accounts constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Get details about the current client.
     *
     * @return Response\Ping\WhoAmI
     */
    public function whoAmI()
    {
        return $this->client->deserializeResponse(
            $this->client->get('/ping/whoami'),
            Response\Ping\WhoAmI::class
        );
    }
}
