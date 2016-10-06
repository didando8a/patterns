<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\ClockSetup;

$clockSetup =  new ClockSetup();

/**
 * 1 Year
 */
$clockSetup
    ->rotateKnobRight()
    ->pushKnob()
;


/**
 * 2 Months
 */
$clockSetup
    ->rotateKnobRight()
    ->rotateKnobRight()
    ->pushKnob()
;

/**
 * 3 Days
 */
$clockSetup
    ->rotateKnobRight()
    ->rotateKnobRight()
    ->rotateKnobRight()
    ->pushKnob()
;

/**
 * 2 Hours
 */
$clockSetup
    ->rotateKnobLeft()
    ->rotateKnobLeft()
    ->pushKnob()
;

/**
 * 1 Minute
 */
$clockSetup
    ->rotateKnobRight()
    ->rotateKnobRight()
    ->pushKnob()
;

$clockSetup->pushKnob();

echo $clockSetup->getSelectedDate() . "\n";