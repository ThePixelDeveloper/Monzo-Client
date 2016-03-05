<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\MondoClientInterface;

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
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getAccounts()
    {
        return $this->client->get('/accounts');
    }
}
