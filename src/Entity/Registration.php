<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\VehicleInterface;

class Registration
{
    private $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function allocateLicensePlate()
    {
        return "License plate allocated...\n";
    }

    public function allocateLicenseNumber()
    {
        return "License number allocated...\n";
    }
}
