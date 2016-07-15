<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 20/06/16
 * Time: 15:04
 */

namespace Reduplication;


class ReduplicationConfig
{
    /**
     * @var string
     */
    protected $language;
    /**
     * @var string
     */
    protected $base;

    /**
     * @param string $language
     * @param string $base
     */
    public function __construct(string $language, string $base)
    {
        $this->language = (string) $language;
        $this->base = (string) $base;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getBase(): string
    {
        return $this->base;
    }
}