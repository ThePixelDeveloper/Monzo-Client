<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use GuzzleHttp\Client;
use PhpSpec\ObjectBehavior;

class AccountsSpec extends ObjectBehavior
{
    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Accounts');
    }

    function it_should_return_all_the_accounts()
    {
        $this->getAccounts();
    }
}
