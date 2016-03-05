<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\MondoClientInterface;

/**
 * Class Balance
 *
 * @package Thepixeldeveloper\Mondo\Client
 */
class Balance
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
     * Get the balance for an account id.
     *
     * @param string $accountId
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getBalanceForAccountId($accountId)
    {
        return $this->client->get('/balance', [
            'query' => [
                'account_id' => $accountId
            ]
        ]);
    }
}
