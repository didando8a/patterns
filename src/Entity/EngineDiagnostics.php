<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\EngineVisitorInterface;

class EngineDiagnostics implements EngineVisitorInterface
{
    public function visitCamshaft(Camshaft $camshaft)
    {
        echo "Diagnosing the camshaft\n";
    }

    public function visitEngine(EngineInterface $engine)
    {
        echo "Diagnosing the unit engine \n";
    }

    public function visitPiston(Piston $piston)
    {
        echo "Diagnosing the piston \n";
    }

    public function visitSparkPlug(SparkPlug $sparkPlug)
    {
        echo "Diagnosing a single spark plug \n";
    }
}
