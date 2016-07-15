<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 11:42
 */

namespace Reduplication\Strategy\Standard;


use Reduplication\ReduplicationConfig;
use Reduplication\ReduplicatorInterface;

class Constructor extends Strategy implements ReduplicatorInterface
{

    public function __construct(ReduplicationConfig $config)
    {
        parent::__construct($config);
    }

    /**
     * @param Context $context
     * @return bool
     */
    protected function preExtract(Context $context) : bool
    {
        // TODO: Implement preExtract() method.
    }

    /**
     * @param Context $context
     * @return bool
     */
    protected function extract(Context $context) : bool
    {
        // TODO: Implement extract() method.
    }

    /**
     * @param Context $context
     * @return bool
     */
    protected function postExtract(Context $context) : bool
    {
        // TODO: Implement postExtract() method.
    }

    /**
     * @param Context $context
     * @return bool
     */
    protected function preConcatenate(Context $context) : bool
    {
        // TODO: Implement preConcatenate() method.
    }

    /**
     * @param Context $context
     * @return bool
     */
    protected function concatenate(Context $context) : bool
    {
        // TODO: Implement concatenate() method.
    }
}