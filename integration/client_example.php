<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Thepixeldeveloper\Mondo;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$outputBlock = function($title, \GuzzleHttp\Psr7\Response $response) {

    print $title;
    print PHP_EOL;

    $arrayOutput = json_decode($response->getBody()->getContents());
    $prettyJson  = json_encode($arrayOutput, JSON_PRETTY_PRINT);

    print $prettyJson;

    print PHP_EOL;
    print PHP_EOL;
};

// Get a client from the factory.
$client = (new Mondo\ClientFactory(getenv('ACCESS_TOKEN')))
    ->getClient();

$ping = new Mondo\Client\Ping($client);

$outputBlock('Who am i?', $ping->whoAmI());

$accounts = new Mondo\Client\Accounts($client);

$outputBlock('Accounts', $accounts->getAccounts());

$balance = new Mondo\Client\Balance($client);

$outputBlock('Balance', $balance->getBalanceForAccountId('...'));

$transactions = new Mondo\Client\Transactions($client);

$outputBlock('All Transactions', $transactions->getTransactionsForAccountId('...'));
$outputBlock('Specific Transaction', $transactions->getTransaction('...'));
