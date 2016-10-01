<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\EngineProxy;
use Didando8a\Patterns\Entity\EngineFactory;

$engineFactory = new EngineFactory();
$myEngine = new EngineProxy($engineFactory, 1600, false);

echo $myEngine . "\n";