<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Didando8a\Patterns\Entity\CarRange;
use Didando8a\Patterns\Entity\VanRange;
use Didando8a\Patterns\Entity\Saloon;
use Didando8a\Patterns\Entity\Coupe;
use Didando8a\Patterns\Entity\Sport;
use Didando8a\Patterns\Entity\Boxvan;
use Didando8a\Patterns\Entity\Pickup;
use Didando8a\Patterns\Entity\TurboEngine;
use Didando8a\Patterns\Entity\StandardEngine;

$cars = new CarRange();
$cars->addElement(new Saloon(new StandardEngine(1300)));
$cars->addElement(new Saloon(new StandardEngine(1600)));
$cars->addElement(new Coupe(new StandardEngine(2000)));
$cars->addElement(new Sport(new TurboEngine(1600)));

$vans = new VanRange();
$vans->addElement(new Boxvan(new StandardEngine(1600)));
$vans->addElement(new Boxvan(new StandardEngine(2000)));
$vans->addElement(new Pickup(new TurboEngine(2200)));

foreach ($cars as $car) {
    echo $car . "\n";
}

echo "===========================\n";

foreach ($vans as $van) {
    echo $van . "\n";
}
