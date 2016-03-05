<?php

namespace spec\Thepixeldeveloper\Mondo\Response;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BalanceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Response\Balance');
    }

    function it_should_return_a_balance()
    {
        $this->getBalance()->shouldReturn(null);
    }

    function it_should_return_a_currency()
    {
        $this->getCurrency()->shouldReturn(null);
    }

    function it_should_return_the_spend_today()
    {
        $this->getSpendToday()->shouldReturn(null);
    }
}
