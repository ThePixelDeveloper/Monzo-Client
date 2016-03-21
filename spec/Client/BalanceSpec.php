<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Thepixeldeveloper\Mondo\ClientInterface;
use Thepixeldeveloper\Mondo\Response\Balance;

class BalanceSpec extends ObjectBehavior
{
    function let(ClientInterface $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Balance');
    }

    function it_should_get_a_balance_for_an_id(ClientInterface $client, ResponseInterface $response)
    {
        $client->get('/balance', [
            'query' => [
                'account_id' => 123
            ]
        ])->willReturn($response);

        $client->deserializeResponse($response, Balance::class)->willReturn(new Balance());

        $this->getBalanceForAccountId(123)->shouldHaveType(Balance::class);
    }
}
