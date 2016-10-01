<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractVehicleOption;
use Didando8a\Patterns\Interfaces\VehicleInterface;

class AlloyWheeledVehicle extends AbstractVehicleOption
{
    public function __construct(VehicleInterface $vehicle)
    {
        parent::__construct($vehicle);
    }

    public function getPrice()
    {
        return $this->decorateVehicle->getPrice() + 250;
    }

}
