<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractVehicleOption;
use Didando8a\Patterns\Interfaces\VehicleInterface;

class AirConditionedVehicle extends AbstractVehicleOption
{
    protected $temperature;

    public function __construct(VehicleInterface $vehicle)
    {
        parent::__construct($vehicle);
    }

    public function getPrice()
    {
        return $this->decorateVehicle->getPrice() + 600;
    }

    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }
}
