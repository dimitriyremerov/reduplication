#!/usr/bin/env php
<?php

if (empty($argv[1])) die('Argument required' . PHP_EOL);

include 'vendor/autoload.php';

$config = new Reduplication\ReduplicationConfig('en', 'huy');
$reduplicator = new Reduplication\Strategy\FirstVowel($config);

echo $reduplicator->reduplicate($argv[1]), PHP_EOL;

