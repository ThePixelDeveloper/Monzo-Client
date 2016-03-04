<?php

namespace Thepixeldeveloper\Mondo\Http;

/**
 * Class ResponseCodes
 *
 * @package Thepixeldeveloper\Mondo\Http
 */
class ResponseCodes
{
    const MESSAGES = [
        200 => 'All is well.',
        400 => 'Your request has missing arguments or is malformed.',
        401 => 'Your request is not authenticated.',
        403 => 'Your request is authenticated but has insufficient permissions.',
        405 => 'You are using an incorrect HTTP verb. Double check whether it should be POST/GET/DELETE/etc.',
        404 => 'The endpoint requested does not exist.',
        406 => 'Your application does not accept the content format returned according to the Accept headers sent in the request.',
        429 => 'Your application is exceeding its rate limit. Back off, buddy. :p',
        500 => 'Something is wrong on our end. Whoopsie.',
        504 => 'Something has timed out on our end. Whoopsie.',
    ];

    /**
     * Message for a given response code.
     *
     * @param integer $responseCode HTTP response code.
     *
     * @return string
     */
    public function getMessage($responseCode)
    {
        return ResponseCodes::MESSAGES[$responseCode];
    }
}
