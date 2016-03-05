<?php

namespace Thepixeldeveloper\Mondo;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface MondoClientInterface
 *
 * @package Thepixeldeveloper\Mondo
 */
interface MondoClientInterface
{
    /**
     * @param string $uri
     * @param array  $options
     *
     * @return mixed
     */
    public function get($uri, $options = []);

    /**
     * @param ResponseInterface $data
     * @param string            $type
     *
     * @return object
     */
    public function deserializeResponse(ResponseInterface $data, $type);
}
