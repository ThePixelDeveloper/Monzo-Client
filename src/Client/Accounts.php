<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\MondoClientInterface;
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
