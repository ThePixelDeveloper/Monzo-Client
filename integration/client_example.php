<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use Thepixeldeveloper\Mondo;
use Thepixeldeveloper\Mondo\Client;
use Thepixeldeveloper\Mondo\GuzzleClientFactory;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Ensure JMS Serializer annotations work.
AnnotationRegistry::registerLoader('class_exists');

$outputBlock = function($title, $value) {

    print $title;
    print PHP_EOL;

    print $value;

    print PHP_EOL;
    print PHP_EOL;
};

// Generate a Mondo Guzzle client
$guzzleFactory = new GuzzleClientFactory(getenv('ACCESS_TOKEN'));
$guzzleClient  = $guzzleFactory->getClient();

// Mondo wrapper around Guzzle.
$client = new Client($guzzleClient, SerializerBuilder::create()->build());

$ping = new Mondo\Client\Ping($client);
$outputBlock('Your user ID: ', $ping->whoAmI()->getUserId());

$accounts  = new Mondo\Client\Accounts($client);
$accountId = $accounts->getAccounts()->getAccounts()[0]->getId();
$outputBlock('Your first account ID: ', $accountId);

$balance = new Mondo\Client\Balance($client);
$outputBlock('Your balance: ', $balance->getBalanceForAccountId($accountId)->getBalance());

$transactions  = new Mondo\Client\Transactions($client);
$transactionId = $transactions->getTransactionsForAccountId($accountId)->getTransactions()[0]->getId();

$outputBlock('How many transactions you\'ve made: ', count($transactions->getTransactionsForAccountId($accountId)->getTransactions()));
$outputBlock('First transaction: ', $transactions->getTransaction($transactionId)->getDescription());
