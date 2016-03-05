<?php

namespace Thepixeldeveloper\Mondo;

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
    public function getAsync($uri, $options = []);
}
