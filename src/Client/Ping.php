<?php

namespace Thepixeldeveloper\Mondo\Client;

use GuzzleHttp\ClientInterface;

/**
 * Class Ping
 *
 * @package Thepixeldeveloper\Mondo\Client
 */
class Ping
{
    /**
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
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function whoAmI()
    {
        return $this->client->request('GET', '/ping/whoami');
    }
}
