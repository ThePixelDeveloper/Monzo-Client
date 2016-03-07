<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Thepixeldeveloper\Mondo\MondoClientInterface;

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

    function it_should_return_all_the_accounts()
    {
        $this->getAccounts();
    }
}
