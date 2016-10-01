<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

abstract class AbstractVehicleOption extends AbstractVehicle
{
    protected $decorateVehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        parent::__construct($vehicle->getEngine(), $this->getColor());
        $this->decorateVehicle = $vehicle;
    }
}
