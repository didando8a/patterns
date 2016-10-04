<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\EngineManagementSystem;
use Didando8a\Patterns\Entity\Ignition;
use Didando8a\Patterns\Entity\GearBox;
use Didando8a\Patterns\Entity\Accelerator;
use Didando8a\Patterns\Entity\Brake;

$mediator = new EngineManagementSystem();
$ignition = new Ignition($mediator);
$accelerator = new Accelerator($mediator);
$brake = new Brake($mediator);
$gearBox = new GearBox($mediator);

$mediator
    ->registerIgnition($ignition)
    ->registerAccelerator($accelerator)
    ->registerBrake($brake)
    ->registerGearBox($gearBox)
    ;

$mediator->ignitionTurnedOn();
$accelerator->accelerateToSpeed(80);
$mediator->acceleratorPressed();