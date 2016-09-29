<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Didando8a\Patterns\Entity\SuperGreenEngine;
use Didando8a\Patterns\Entity\SuperGreenEngineAdapter;
use Didando8a\Patterns\Entity\StandardEngine;
use Didando8a\Patterns\Entity\TurboEngine;

$greenEngine = new SuperGreenEngine(1200);
$superGreenEngine = new SuperGreenEngineAdapter($greenEngine);

$engines = [
    new StandardEngine(1300),
    new StandardEngine(1600),
    new TurboEngine(200),
    $superGreenEngine,
];


foreach ($engines as $engine) {
    echo $engine . "\n";
}
