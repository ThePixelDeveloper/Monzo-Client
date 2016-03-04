<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use GuzzleHttp\Client;
use PhpSpec\ObjectBehavior;

class BalanceSpec extends ObjectBehavior
{
    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Balance');
    }

    function it_should_get_a_balance_for_an_id()
    {
        $this->getBalanceForAccountId(123);
    }
}
