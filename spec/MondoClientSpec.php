<?php

namespace spec\Thepixeldeveloper\Mondo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MondoClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\MondoClient');
    }
}
