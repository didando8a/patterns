<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Didando8a\Patterns\Entity\Saloon;
use Didando8a\Patterns\Entity\StandardEngine;
use Didando8a\Patterns\Entity\CarBuilder;
use Didando8a\Patterns\CarDirector;

$car = new Saloon(new StandardEngine(1300), 'Blue');
$builder = new CarBuilder($car);
$director = new CarDirector();
$vehicle = $director->build($builder);
