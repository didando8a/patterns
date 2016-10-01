<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\EngineFlyWeightFactory;
use Didando8a\Patterns\Entity\EngineDiagnosticTool;

$factory = new EngineFlyWeightFactory();
$tool = new EngineDiagnosticTool();

$standard1 = $factory->getStandarEngine(1300);
$standard1->diagnose($tool);
$standard2 = $factory->getStandarEngine(1300);
$standard2->diagnose($tool);
$standard3 = $factory->getStandarEngine(1600);
$standard3->diagnose($tool);
$standard4 = $factory->getStandarEngine(1600);
$standard4->diagnose($tool);

echo spl_object_hash($standard1) . "\n";
echo spl_object_hash($standard2) . "\n";
echo spl_object_hash($standard3) . "\n";
echo spl_object_hash($standard4) . "\n";
