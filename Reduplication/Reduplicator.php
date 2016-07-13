<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 20/06/16
 * Time: 15:03
 */

namespace Reduplication;


class Reduplicator
{
    /**
     * @var ReduplicationConfig
     */
    protected $config;

    /**
     * @param ReduplicationConfig $config
     */
    public function __construct(ReduplicationConfig $config)
    {
        $this->config = $config;
    }

    /**
     * Main reduplcation function
     *
     * @param string $string
     */
    public function reduplicate($string)
    {

    }
}
