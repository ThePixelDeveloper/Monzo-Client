<?php

namespace spec\Thepixeldeveloper\Mondo;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function let(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->beConstructedWith($client, $serializer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client');
    }
}
