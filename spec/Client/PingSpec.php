<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Thepixeldeveloper\Mondo\Response\Ping\WhoAmI;
use Thepixeldeveloper\Mondo\ClientInterface;

class PingSpec extends ObjectBehavior
{
    function let(ClientInterface $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Ping');
    }

    function it_should_give_me_details_about_who_i_am(ClientInterface $client, ResponseInterface $response)
    {
        $client->get('/ping/whoami')->willReturn($response);

        $client->deserializeResponse($response, WhoAmI::class)->willReturn(new WhoAmI());

        $this->whoAmI()->shouldHaveType(WhoAmI::class);
    }
}
