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

abstract class Strategy extends AbstractReduplicator implements ReduplicatorInterface
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
        $this->context->setRawInput($string);
        if (!$this->preExtract($this->context)) {
            return $string;
        }
        if (!$this->extract($this->context)) {
            return $string;
        }
        if (!$this->postExtract($this->context)) {
            return $string;
        }
        if (!$this->preConcatenate($this->context)) {
            return $string;
        }
        if (!$this->concatenate($this->context)) {
            return $string;
        }
        return $this->context->getResult();
    }

    /**
     * @param Context $context
     * @return bool
     */
    abstract protected function preExtract(Context $context) : bool;
    /**
     * @param Context $context
     * @return bool
     */
    abstract protected function extract(Context $context) : bool;
    /**
     * @param Context $context
     * @return bool
     */
    abstract protected function postExtract(Context $context) : bool;
    /**
     * @param Context $context
     * @return bool
     */
    abstract protected function preConcatenate(Context $context) : bool;
    /**
     * @param Context $context
     * @return bool
     */
    abstract protected function concatenate(Context $context) : bool;
}
