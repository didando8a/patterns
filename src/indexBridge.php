<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Didando8a\Patterns\Entity\StandardEngine;
use Didando8a\Patterns\Entity\StandarControls;
use Didando8a\Patterns\Entity\SportControls;
use Didando8a\Patterns\Entity\TurboEngine;

$standarEngine = new StandardEngine(1300);
$standarControl = new StandarControls($standarEngine);
$standarControl->ignitionOn();
$standarControl->accelerate();
$standarControl->brake();
$standarControl->ignitionOff();

$sportEngine = new TurboEngine(3000);
$sportControl = new SportControls($sportEngine);
$sportControl->ignitionOn();
$sportControl->accelerate();
$sportControl->accelerateHard();
$sportControl->brake();
$sportControl->ignitionOff();
