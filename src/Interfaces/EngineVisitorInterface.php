<?php

namespace Didando8a\Patterns\Interfaces;

use Didando8a\Patterns\Entity\Camshaft;
use Didando8a\Patterns\Entity\Piston;
use Didando8a\Patterns\Entity\SparkPlug;

interface EngineVisitorInterface
{
    public function visitCamshaft(Camshaft $camshaft);
    public function visitEngine(EngineInterface $engine);
    public function visitPiston(Piston $piston);
    public function visitSparkPlug(SparkPlug $sparkPlug);
}
