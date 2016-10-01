<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\Saloon;
use Didando8a\Patterns\Entity\StandardEngine;
use Didando8a\Patterns\Entity\VehicleFacade;

$myCar = new Saloon(new StandardEngine(1600));

VehicleFacade::prepareForSale($myCar);
