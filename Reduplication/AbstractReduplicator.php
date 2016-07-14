<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 20/06/16
 * Time: 15:03
 */

namespace Reduplication;


abstract class AbstractReduplicator implements ReduplicatorInterface
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
     * @return string
     */
    abstract public function reduplicate(string $string) : string;
}
