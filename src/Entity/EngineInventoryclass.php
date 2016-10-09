<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\EngineVisitorInterface;

class EngineInventoryclass implements EngineVisitorInterface
{
    private $camshaftCount;
    private $pistonCount;
    private $sparkPlugCount;

    public function __construct()
    {
        $this->camshaftCount = 0;
        $this->pistonCount = 0;
        $this->sparkPlugCount = 0;
    }

    public function visitCamshaft(Camshaft $camshaft)
    {
        $this->camshaftCount++;
    }

    public function visitEngine(EngineInterface $engine)
    {
        echo "The engine has: \n";
        echo $this->camshaftCount, " camshafts.", PHP_EOL;
        echo $this->sparkPlugCount, " spark plugs.", PHP_EOL;
        echo $this->pistonCount, " pinstons.", PHP_EOL;
    }

    public function visitPiston(Piston $piston)
    {
        $this->pistonCount++;
    }

    public function visitSparkPlug(SparkPlug $sparkPlug)
    {
        $this->sparkPlugCount++;
    }
}
