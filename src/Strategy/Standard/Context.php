<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 11:27
 */

namespace Reduplication\Strategy\Standard;


class Context
{
    /**
     * @var string
     */
    protected $rawInput;
    /**
     * @var string
     */
    protected $base;
    /**
     * @var string
     */
    protected $preExtracted;
    /**
     * @var string
     */
    protected $extracted;
    /**
     * @var string
     */
    protected $removedPart;
    /**
     * @var string
     */
    protected $postExtracted;
    /**
     * @var string
     */
    protected $preConcatenatedInput;
    /**
     * @var string
     */
    protected $preConcatenatedBase;
    /**
     * @var string
     */
    protected $result;

    /**
     * @return string
     */
    public function getRawInput(): string
    {
        return $this->rawInput;
    }

    /**
     * @param string $rawInput
     * @return Context
     */
    public function setRawInput(string $rawInput): Context
    {
        $this->rawInput = $rawInput;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase(): string
    {
        return $this->base;
    }

    /**
     * @param string $base
     * @return Context
     */
    public function setBase(string $base): Context
    {
        $this->base = $base;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreExtracted(): string
    {
        return $this->preExtracted;
    }

    /**
     * @param string $preExtracted
     * @return Context
     */
    public function setPreExtracted(string $preExtracted): Context
    {
        $this->preExtracted = $preExtracted;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtracted(): string
    {
        return $this->extracted;
    }

    /**
     * @param string $extracted
     * @return Context
     */
    public function setExtracted(string $extracted): Context
    {
        $this->extracted = $extracted;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemovedPart(): string
    {
        return $this->removedPart;
    }

    /**
     * @param string $removedPart
     * @return Context
     */
    public function setRemovedPart(string $removedPart): Context
    {
        $this->removedPart = $removedPart;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostExtracted(): string
    {
        return $this->postExtracted;
    }

    /**
     * @param string $postExtracted
     * @return Context
     */
    public function setPostExtracted(string $postExtracted): Context
    {
        $this->postExtracted = $postExtracted;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreConcatenatedInput(): string
    {
        return $this->preConcatenatedInput;
    }

    /**
     * @param string $preConcatenatedInput
     * @return Context
     */
    public function setPreConcatenatedInput(string $preConcatenatedInput): Context
    {
        $this->preConcatenatedInput = $preConcatenatedInput;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreConcatenatedBase(): string
    {
        return $this->preConcatenatedBase;
    }

    /**
     * @param string $preConcatenatedBase
     * @return Context
     */
    public function setPreConcatenatedBase(string $preConcatenatedBase): Context
    {
        $this->preConcatenatedBase = $preConcatenatedBase;
        return $this;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return Context
     */
    public function setResult(string $result): Context
    {
        $this->result = $result;
        return $this;
    }

}
