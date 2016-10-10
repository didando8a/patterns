<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\GearFactory;

$auto = GearFactory::create(1);
$manual = GearFactory::create(2);

$auto->getCurrentGear();
$manual->getCurrentGear();