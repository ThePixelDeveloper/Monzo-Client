<?php

namespace Thepixeldeveloper\Mondo\Client;

use Thepixeldeveloper\Mondo\ClientInterface;
use Thepixeldeveloper\Mondo\Response;

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
     * @return Response\Balance
     */
    public function getBalanceForAccountId($accountId)
    {
        return $this->client->deserializeResponse(
            $this->client->get('/balance', [
                'query' => [
                    'account_id' => $accountId
                ]
            ]),
            Response\Balance::class
        );
    }
}
