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
// Get a client from the factory.
$client = (new Thepixeldeveloper\Mondo\ClientFactory('access_token'))->getClient();

// Pass the client into the relevant Client class.
$ping = new Thepixeldeveloper\Mondo\Client\Ping($client);

// Response is of the type \Psr\Http\Message\ResponseInterface
$response = $ping->whoAmI();

var_dump($response->getBody()->getContents());
```

Should give us ...

``` json
{
    "authenticated": true,
    "client_id": "...",
    "user_id": "..."
}
```

Accounts
-----

``` php
$accounts = new Thepixeldeveloper\Mondo\Client\Accounts($client);

var_dump($accounts->getAccounts()->getBody()->getContents())
```

``` json
{
    "accounts": [
        {
            "id": "...",
            "account_number": "...",
            "sort_code": "...",
            "created": "2016-01-12T12:44:45.367Z",
            "description": "John Smith"
        }
    ]
}
```

Balance
-----

``` php
$balance = new Thepixeldeveloper\Mondo\Client\Balance($client);

var_dump($balance->getBalanceForAccountId('...')->getBody()->getContents())
```

``` json
{
    "balance": 0,
    "currency": "GBP",
    "spend_today": 0
}
```

Transactions
-----

**All transactions**

``` php
$transactions = new Thepixeldeveloper\Mondo\Client\Transactions($client);

var_dump($transactions->getTransactionsForAccountId('...')->getBody()->getContents())
```

``` json
{
    "transactions": [
        {
            "id": "...",
            "created": "2016-02-23T12:34:54.683Z",
            "description": "Initial top up",
            "amount": 10000,
            "currency": "GBP",
            "merchant": null,
            "notes": "",
            "metadata": {},
            "account_balance": 10000,
            "attachments": [],
            "category": "mondo",
            "is_load": true,
            "settled": "2016-02-23T12:34:54.683Z",
            "local_amount": 10000,
            "local_currency": "GBP"
        },
        ...
    ]
}
```

**Specific transaction**

``` php
$transactions = new Thepixeldeveloper\Mondo\Client\Transactions($client);

var_dump($transactions->getTransaction('...')->getBody()->getContents())
```

``` json
{
    "transaction": {
        "id": "...",
        "created": "2016-02-23T12:34:54.683Z",
        "description": "Initial top up",
        "amount": 10000,
        "currency": "GBP",
        "merchant": null,
        "notes": "",
        "metadata": {},
        "account_balance": 10000,
        "attachments": [],
        "category": "mondo",
        "is_load": true,
        "settled": "2016-02-23T12:34:54.683Z",
        "local_amount": 10000,
        "local_currency": "GBP"
    }
}
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
