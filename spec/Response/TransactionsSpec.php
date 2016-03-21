<?php

namespace spec\Thepixeldeveloper\Mondo\Response;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TransactionsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Response\Transactions');
    }

    function it_should_return_an_id()
    {
        $this->getTransactions()->shouldBeArray();
    }
}
