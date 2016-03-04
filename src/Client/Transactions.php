<?php

namespace Thepixeldeveloper\Mondo\Client;

use GuzzleHttp\ClientInterface;

class Transactions
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
     * Information for a given transaction ID.
     *
     * @param string $transactionId
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getTransaction($transactionId)
    {
        return $this->client->request('GET', '/transactions/' . $transactionId);
    }

    /**
     * Get the transaction history for the account id.
     *
     * @param string $accountId
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getTransactionsForAccountId($accountId)
    {
        return $this->client->request('GET', '/transactions', [
            'query' => ['account_id' => $accountId],
        ]);
    }

    /**
     * Add annotation(s) for a transaction.
     *
     * @param string       $transactionId
     * @param string|array $key
     * @param string       $value
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function addAnnotationForTransaction($transactionId, $key, $value = null)
    {
        if (is_string($key)) {
            $metadata = [$key => $value];
        } else {
            $metadata = $key;
        }

        return $this->client->request('GET', '/transactions/' . $transactionId, [
            'body' => ['metadata' => $metadata],
        ]);
    }

    /**
     * Remove annotation(s) for a transaction.
     *
     * @param string $transactionId
     * @param string $keys
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function removeAnnotationForTransaction($transactionId, $keys)
    {
        if (is_string($keys)) {
            $keys = [$keys];
        }

        $keys = array_flip($keys);

        return $this->client->request('GET', '/transactions/' . $transactionId, [
            'body' => ['metadata' => $keys],
        ]);
    }
}
