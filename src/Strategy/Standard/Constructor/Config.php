<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 15/07/16
 * Time: 11:45
 */

namespace Reduplication\Strategy\Standard\Constructor;


class Config
{
    private $preExtractSequence;
    private $extractSequence;
    private $postExtractSequence;
    private $preConcatenateSequence;
    private $concatenateSequence;

    public function __construct(string $jsonConfig) // TODO Replace with Symfony config loader
    {
        $configArr = json_decode($jsonConfig, true);

    }
}
