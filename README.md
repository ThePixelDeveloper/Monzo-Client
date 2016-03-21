Thepixeldeveloper\Mondo
=========================

[![Author](http://img.shields.io/badge/author-@colonelrosa-blue.svg)](https://twitter.com/colonelrosa)
[![Version Status](http://php-eye.com/badge/thepixeldeveloper/mondo-client/tested.svg?style=flat)](https://travis-ci.org/ThePixelDeveloper/Mondo-Client)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/thepixeldeveloper/mondo-client.svg)](https://packagist.org/packages/thepixeldeveloper/mondo-client)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/53bd0d3a-92e1-4730-b92b-6ad98e7d02b4.svg)](https://insight.sensiolabs.com/projects/53bd0d3a-92e1-4730-b92b-6ad98e7d02b4)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ThePixelDeveloper/Mondo-Client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ThePixelDeveloper/Mondo-Client/?branch=master)

A [Mondo Bank](https://getmondo.co.uk/) API Client - https://getmondo.co.uk/docs

This library is an MVP and only supports the basic functionality.  
Doesn't yet support pagination, expansions and file uploads. Pull requests happily accepted.

Install
-----

``` bash
composer require thepixeldeveloper/mondo-client
```

Quick start
-----

``` php
// Get an instance of the Guzzle client
$guzzleClient = (new Thepixeldeveloper\Mondo\GuzzleClientFactory(getenv('ACCESS_TOKEN')))->getClient();

// and create a Mondo client
$client = new Thepixeldeveloper\Mondo\Client($guzzleClient, SerializerBuilder::create()->build());

// Pass the client into the relevant Client class.
$ping = new Thepixeldeveloper\Mondo\Client\Ping($client);

// Response is of the type Thepixeldeveloper\Mondo\Response\Ping\WhoAmI
$response = $ping->whoAmI();
```

Accounts
-----

``` php
$accounts = new Thepixeldeveloper\Mondo\Client\Accounts($client);
$accounts->getAccounts();
```

Balance
-----

``` php
$balance = new Thepixeldeveloper\Mondo\Client\Balance($client);
$balance->getBalanceForAccountId(123);
```

Transactions
-----

``` php
$transactions = new Thepixeldeveloper\Mondo\Client\Transactions($client);
$transactions->getTransactionsForAccountId(123);
$transactions->getTransaction(456);
```

OAuth 2
-----

I've decided to leave out authentication for the MVP.
Use a library like
[League/oauth2-client](http://oauth2-client.thephpleague.com/) to get yourself an access token.

Testing
-----

Run the phpSpec tests with ...

``` bash
composer test
```
