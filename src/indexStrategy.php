<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\Sport;
use Didando8a\Patterns\Entity\SportGearboxStrategy;
use Didando8a\Patterns\Entity\StandardEngine;


$myCar = new Sport(New StandardEngine(2000));
$myCar->setSpeed(20);
$myCar->setSpeed(40);

$myCar->setGearboxStrategy(new SportGearboxStrategy());
$myCar->setSpeed(20);
$myCar->setSpeed(40);
