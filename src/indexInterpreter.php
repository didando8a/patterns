<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\DirectionalEvaluator;

$evaluator = new DirectionalEvaluator();
echo $evaluator->evaluate('london edinburgh manchester southerly') . "\n";

echo $evaluator->evaluate('london edinburgh manchester southerly aberdeen westerly') . "\n";
