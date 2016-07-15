<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 11:45
 */

namespace Reduplication\Strategy\Standard\Constructor;


use Reduplication\Strategy\Standard\Context;

class ConstructorConfig
{
    /**
     * @var callable[] Array of callbacks
     */
    private $sequence = [];

    /**
     * Config constructor.
     * @param string $jsonConfig
     */
    public function __construct(string $jsonConfig) // TODO Replace with Symfony config loader
    {
        $configArr = json_decode($jsonConfig, true);
        foreach ($jsonConfig['sequence'] as $callback) {
            if (is_callable($callback)) {
                $this->sequence[] = \Closure::fromCallable($callback);
            }
        }
        if (!$this->sequence) {
            $this->sequence[] = function (Context $context) {
                return $context->getRawInput();
            };
        }
    }

    /**
     * @return callable[] Array of callbacks
     */
    public function getSequence(): array
    {
        return $this->sequence;
    }

}
