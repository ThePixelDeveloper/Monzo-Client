<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\ClientInterface;
use Thepixeldeveloper\Mondo\Response;

/**
 * Class Accounts
 *
 * @package Thepixeldeveloper\Mondo\Client
 */
class Accounts
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
     * Get a list of accounts for the authorised user.
     *
     * @return Response\Accounts
     */
    public function getAccounts()
    {
        return $this->client->deserializeResponse(
            $this->client->get('/accounts'),
            Response\Accounts::class
        );
    }
}
