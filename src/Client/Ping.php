<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\MondoClientInterface;
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
     * @var MondoClientInterface
     */
    protected $client;

    /**
     * Accounts constructor.
     *
     * @param MondoClientInterface $client
     */
    public function __construct(MondoClientInterface $client)
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
