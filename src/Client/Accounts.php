<?php

namespace Thepixeldeveloper\Mondo\Client;

use GuzzleHttp\ClientInterface;

/**
 * Class Accounts
 *
 * @package Thepixeldeveloper\Mondo\Client
 */
class Accounts
{
    /**
     * Guzzle client.
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
     * Get a list of accounts for the authorised user.
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getAccounts()
    {
        return $this->client->request('GET', '/accounts');
    }
}
