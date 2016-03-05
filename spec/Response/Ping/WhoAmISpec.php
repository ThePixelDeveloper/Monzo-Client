<?php

namespace spec\Thepixeldeveloper\Mondo\Response\Ping;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WhoAmISpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Response\Ping\WhoAmI');
    }

    function it_should_tell_me_if_this_is_authenticated()
    {
        $this->isAuthenticated()->shouldReturn(false);
    }

    function it_should_return_a_client_id()
    {
        $this->getClientId()->shouldBe(null);
    }

    function it_should_return_a_user_id()
    {
        $this->getUserId()->shouldBe(null);
    }
}
