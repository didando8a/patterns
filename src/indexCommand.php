<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\{
    Radio,
    VolumeDownCommand,
    VolumeUpCommand,
    ElectricWindow,
    WindowDownCommand,
    WindowUpCommand,
    SpeechRecognizer
};

$radio = new Radio();
$radio->on();
$volumeUp = new VolumeUpCommand($radio);
$volumeDown = new VolumeDownCommand($radio);

$window = new ElectricWindow();
$windowUp = new WindowUpCommand($window);
$windowDown = new WindowDownCommand($window);

$speechRecognizer = new SpeechRecognizer();
$speechRecognizer->setCommands($volumeUp, $volumeDown);
$speechRecognizer->hearUpSpoken();
$speechRecognizer->hearDownSpoken();

$speechRecognizer->setCommands($windowUp, $windowDown);
$speechRecognizer->hearDownSpoken();
$speechRecognizer->hearUpSpoken();


