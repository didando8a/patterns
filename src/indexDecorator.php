<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\Saloon;
use Didando8a\Patterns\Entity\StandardEngine;
use Didando8a\Patterns\Interfaces\VehicleInterface;
use Didando8a\Patterns\Entity\AirConditionedVehicle;
use Didando8a\Patterns\Entity\AlloyWheeledVehicle;
use Didando8a\Patterns\Entity\LeatherSeatedVehicle;
use Didando8a\Patterns\Entity\MetallicPaintedVehicle;
use Didando8a\Patterns\Entity\SatNavVehicle;

$myCar = new Saloon(new StandardEngine(1800));
$myCar->paint(VehicleInterface::BLUE);

$myCar = new AirConditionedVehicle($myCar);
echo $myCar . "\n";

$myCar = new AlloyWheeledVehicle($myCar);
echo $myCar . "\n";

$myCar = new LeatherSeatedVehicle($myCar);
echo $myCar . "\n";

$myCar = new MetallicPaintedVehicle($myCar);
echo $myCar . "\n";

$myCar = new SatNavVehicle($myCar);
echo $myCar . "\n";

