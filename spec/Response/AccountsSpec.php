<?php

namespace spec\Thepixeldeveloper\Mondo\Response;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Response\Accounts');
    }

    function it_should_return_a_collection_of_accounts()
    {
        $this->getAccounts()->shouldBeArray();
    }
}
