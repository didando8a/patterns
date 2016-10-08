<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\SaloonBooklet;
use Didando8a\Patterns\Entity\ServiceHistoryBooklet;

$saloonBooklet = new SaloonBooklet();
$serviceHistoryBooklet = new ServiceHistoryBooklet();

$saloonBooklet->printBooklet();
echo "====================" . PHP_EOL;
$serviceHistoryBooklet->printBooklet();