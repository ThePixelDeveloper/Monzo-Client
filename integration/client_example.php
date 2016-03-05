<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use Thepixeldeveloper\Mondo;
use Thepixeldeveloper\Mondo\MondoClient;

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

$guzzleClient = new Mondo\ClientFactory(getenv('ACCESS_TOKEN'));
$guzzleClient = $guzzleClient->getClient();

$serializer   = SerializerBuilder::create()->build();

$client = new MondoClient($guzzleClient, $serializer);

$ping = new Mondo\Client\Ping($client);

$outputBlock('Who am i?', $ping->whoAmI()->getUserId());

//$accounts = new Mondo\Client\Accounts($client);
//
//$outputBlock('Accounts', $accounts->getAccounts());
//
//$balance = new Mondo\Client\Balance($client);
//
//$outputBlock('Balance', $balance->getBalanceForAccountId('...'));
//
//$transactions = new Mondo\Client\Transactions($client);
//
//$outputBlock('All Transactions', $transactions->getTransactionsForAccountId('...'));
//$outputBlock('Specific Transaction', $transactions->getTransaction('...'));
