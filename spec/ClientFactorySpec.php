<?php

namespace spec\Thepixeldeveloper\Mondo;

use Prophecy\Argument;
use GuzzleHttp\Client;
use PhpSpec\ObjectBehavior;

class ClientFactorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('access_token');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\ClientFactory');
    }

    function it_should_return_the_base_url()
    {
        $this->getBaseUrl()->shouldReturn('https://api.getmondo.co.uk');
    }

    function it_should_create_a_client()
    {
        $this->getClient()->shouldHaveType(Client::class);
    }
}
