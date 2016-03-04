<?php

namespace Thepixeldeveloper\Mondo\Client;

use GuzzleHttp\ClientInterface;

/**
 * Class Balance
 *
 * @package Thepixeldeveloper\Mondo\Client
 */
class Balance
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
     * Get the balance for an account id.
     *
     * @param string $accountId
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getBalanceForAccountId($accountId)
    {
        return $this->client->request('GET', '/balance', [
            'query' => [
                'account_id' => $accountId
            ]
        ]);
    }
}
