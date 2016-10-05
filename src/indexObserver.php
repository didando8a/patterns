<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\SpeedMonitor;
use Didando8a\Patterns\Entity\Speedometer;

$monitor = new SpeedMonitor();
$speedo = new Speedometer();

$speedo->addObserver($monitor);

$speedo->setCurrentSpeed(50);
$speedo->setCurrentSpeed(70);

$speedo->setCurrentSpeed(40);
$speedo->setCurrentSpeed(100);
$speedo->setCurrentSpeed(69);