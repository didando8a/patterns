<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\VehicleInterface;

class AbstractVehicle implements VehicleInterface
{
    private $engine;
    private $color;

    public function getEngine()
    {
        return $this->engine;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function paint($color)
    {
        $this->color = $color;
    }

    public function __toString()
    {
        return get_class($this) . ' (' . (string)$this->engine . ')';
    }
}
