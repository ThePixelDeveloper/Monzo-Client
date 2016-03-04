<?php

namespace spec\Thepixeldeveloper\Mondo\Http;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResponseCodesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Http\ResponseCodes');
    }

    function it_should_map_a_code_to_a_string()
    {
        $this->getMessage(200)->shouldReturn('All is well.');
        $this->getMessage(400)->shouldReturn('Your request has missing arguments or is malformed.');
        $this->getMessage(401)->shouldReturn('Your request is not authenticated.');
        $this->getMessage(403)->shouldReturn('Your request is authenticated but has insufficient permissions.');
        $this->getMessage(405)->shouldReturn('You are using an incorrect HTTP verb. Double check whether it should be POST/GET/DELETE/etc.');
        $this->getMessage(404)->shouldReturn('The endpoint requested does not exist.');
        $this->getMessage(406)->shouldReturn('Your application does not accept the content format returned according to the Accept headers sent in the request.');
        $this->getMessage(429)->shouldReturn('Your application is exceeding its rate limit. Back off, buddy. :p');
        $this->getMessage(500)->shouldReturn('Something is wrong on our end. Whoopsie.');
        $this->getMessage(504)->shouldReturn('Something has timed out on our end. Whoopsie.');
    }
}
