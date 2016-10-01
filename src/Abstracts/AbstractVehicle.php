<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

abstract class AbstractVehicle implements VehicleInterface
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

    public function __toString()
    {
        return sprintf("%s (%s), color: %s, price: %s", get_class($this)
            , $this->engine, $this->color, $this->getPrice());
    }
}
