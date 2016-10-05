<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\SpeedometerMemento;
use Didando8a\Patterns\Entity\Speedometer;

$speedo = new Speedometer();
$speedo
    ->setCurrentSpeed(50)
    ->setCurrentSpeed(100)
;

$memento = new SpeedometerMemento($speedo);

$speedo->setCurrentSpeed(80);

echo $speedo->getCurrentSpeed() . "\n";

$speedo = $memento->restoreState();

echo $speedo->getCurrentSpeed() . "\n";