<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\OilLevelLight;
use Didando8a\Patterns\Entity\BreakFluidLight;
use Didando8a\Patterns\Entity\NullObjectLight;

$lights = [];

$lights[] = new OilLevelLight();
$lights[] = new BreakFluidLight();
$lights[] = new NullObjectLight();

/** @var \Didando8a\Patterns\Interfaces\WarningLightInterface $light */
foreach ($lights as $light) {
    $light->turnOn();
    $light->turnOff();
}