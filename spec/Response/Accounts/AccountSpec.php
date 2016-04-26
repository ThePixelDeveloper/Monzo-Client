<?php

namespace spec\Thepixeldeveloper\Mondo\Response\Accounts;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Response\Accounts\Account');
    }

    function it_should_return_an_id()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_should_return_a_created_date()
    {
        $this->getCreated()->shouldReturn(null);
    }

    function it_should_return_a_description()
    {
        $this->getDescription()->shouldReturn(null);
    }
}
