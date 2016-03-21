<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Thepixeldeveloper\Mondo\MondoClientInterface;
use Thepixeldeveloper\Mondo\Response\Accounts;

class AccountsSpec extends ObjectBehavior
{
    function let(MondoClientInterface $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Accounts');
    }

    function it_should_return_all_the_accounts(MondoClientInterface $client, ResponseInterface $response)
    {
        $client->get('/accounts')->willReturn($response);

        $client->deserializeResponse($response, Accounts::class)->willReturn(new Accounts());

        $this->getAccounts()->shouldHaveType(Accounts::class);
    }
}
