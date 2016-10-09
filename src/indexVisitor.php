<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\StandardEngine;
use Didando8a\Patterns\Entity\EngineDiagnostics;
use Didando8a\Patterns\Entity\EngineInventoryclass;

$diagnostic = new EngineDiagnostics();
$inventory = new EngineInventoryclass();
$engine = new StandardEngine(1300);

echo "\n=============\n";

$engine->acceptEngineVisitor($diagnostic);
$engine->acceptEngineVisitor($inventory);