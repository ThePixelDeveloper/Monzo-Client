<?php

namespace spec\Thepixeldeveloper\Mondo\Response\Transactions;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TransactionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Response\Transactions\Transaction');
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

    function it_should_return_an_amount()
    {
        $this->getAmount()->shouldReturn(null);
    }

    function it_should_return_a_currency()
    {
        $this->getCurrency()->shouldReturn(null);
    }

    function it_should_return_a_merchant()
    {
        $this->getMerchant()->shouldReturn(null);
    }

    function it_should_return_notes()
    {
        $this->getNotes()->shouldReturn(null);
    }

    function it_should_return_an_array_of_metadata()
    {
        $this->getMetadata()->shouldReturn([]);
    }

    function it_should_return_the_account_balance()
    {
        $this->getAccountBalance()->shouldReturn(null);
    }

    function it_should_return_the_settled_date()
    {
        $this->getSettled()->shouldReturn(null);
    }
}
