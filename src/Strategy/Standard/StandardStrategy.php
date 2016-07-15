<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 11:25
 */

namespace Reduplication\Strategy\Standard;


use Reduplication\AbstractReduplicator;
use Reduplication\ReduplicationConfig;
use Reduplication\ReduplicatorInterface;

abstract class StandardStrategy extends AbstractReduplicator implements ReduplicatorInterface
{
    /**
     * @var Context
     */
    protected $context;

    public function __construct(ReduplicationConfig $config)
    {
        parent::__construct($config);
        $this->context = new Context();
        $this->context->setBase($config->getBase());
    }

    public function reduplicate(string $string) : string
    {
        $this->context
            ->setRawInput($string)
            ->setPreExtracted($string)
            ->setExtracted($string)
            ->setRemovedPart('')
            ->setPreConcatenatedBase($this->config->getBase())
            ->setPreConcatenatedInput($string)
            ->setResult($string)
        ;
        if (!$this->processContext($this->context)) {
            return $string;
        }
        return $this->context->getResult();
    }

    /**
     * @param Context $context
     * @return bool
     */
    abstract protected function processContext(Context $context) : bool;
}
