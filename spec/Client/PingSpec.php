<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use GuzzleHttp\Client;
use PhpSpec\ObjectBehavior;

class PingSpec extends ObjectBehavior
{
    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Ping');
    }

    function it_should_give_me_details_about_who_i_am()
    {
        $this->whoAmI();
    }
}
