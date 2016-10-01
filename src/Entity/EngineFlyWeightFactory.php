<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\EngineInterface;

class EngineFlyWeightFactory
{
    private $standardEnginePool;
    private $turboEnginePool;

    public function getStandarEngine($size) : EngineInterface
    {
        if (!isset($this->standardEnginePool[$size])) {
            $this->standardEnginePool[$size] = new StandardEngine($size);
            echo sprintf("new Engine of size %d created.\n", $size);
        }

        $engine = $this->standardEnginePool[$size];

        return $engine;
    }

    public function getTurboEngine($size)
    {
        if (!isset($this->turboEnginePool[$size])) {
            $this->turboEnginePool[$size] = new TurboEngine($size);
        }

        $engine = $this->turboEnginePool[$size];

        return $engine;
    }
}
