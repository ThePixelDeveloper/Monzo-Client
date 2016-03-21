<?php

namespace Thepixeldeveloper\Mondo;

/**
 * Class Client
 *
 * @package Thepixeldeveloper\Mondo
 */
class GuzzleClientFactory
{
    /**
     * Base URL.
     *
     * @var string
     */
    protected $baseUrl = 'https://api.getmondo.co.uk';

    /**
     * Access token.
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Client constructor.
     *
     * @param string $accessToken Access token
     * @param string $baseUrl     Base URL.
     */
    public function __construct($accessToken, $baseUrl = null)
    {
        $this->accessToken = $accessToken;

        if ($baseUrl !== null) {
            $this->baseUrl = $baseUrl;
        }
    }

    /**
     * Base URL.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Access token.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Configured instance of Guzzle API Client
     *
     * @return \GuzzleHttp\Client
     */
    public function getClient()
    {
        return (new \GuzzleHttp\Client([
            'base_uri' => $this->getBaseUrl(),
            'headers'  => [
                'Authorization' => 'Bearer ' . $this->getAccessToken(),
            ],
        ]));
    }
}
