<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 11:42
 */

namespace Reduplication\Strategy\Standard\Constructor;

use Reduplication\ReduplicationConfig;
use Reduplication\ReduplicatorInterface;
use Reduplication\Strategy\Standard\Context;
use Reduplication\Strategy\Standard\StandardStrategy;

class ConstructorStrategy extends StandardStrategy implements ReduplicatorInterface
{
    /**
     * @var bool
     */
    protected $initialized = false;
    /**
     * @var ConstructorConfig
     */
    protected $constructorConfig;

    public function __construct(ReduplicationConfig $config, ConstructorConfig $constructorConfig)
    {
        parent::__construct($config);
    }

    public function init(ConstructorConfig $constructorConfig)
    {
        $this->constructorConfig = $constructorConfig;
    }

    /**
     * @param Context $context
     * @return bool
     */
    protected function processContext(Context $context): bool
    {
        foreach ($this->constructorConfig->getSequence() as $callable) {
            if (!$callable($this->context)) {
                return false;
            }
        }
        return true;
    }
}
