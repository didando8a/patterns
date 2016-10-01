<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

class AbstractVehicle implements VehicleInterface
{
    private $engine;
    private $color;

    /**
     * AbstractVehicle constructor.
     * @param $engine
     * @param $color
     */
    public function __construct(EngineInterface $engine, $color = VehicleInterface::UNPAINTED)
    {
        $this->engine = $engine;
        $this->color = $color;
    }


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

    public function cleanInterior()
    {
        return "Cleaning interior...\n";
    }

    public function cleanExterior()
    {
        return "Cleaning exterior...\n";
    }

    public function polishWindows()
    {
        return "Polishing windows...\n";
    }

    public function takesForTestDrive()
    {
        return "Taking for test drive...\n";
    }


    public function __toString()
    {
        return get_class($this) . ' (' . (string)$this->engine . ')';
    }
}
