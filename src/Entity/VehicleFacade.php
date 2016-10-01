<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\VehicleInterface;

class VehicleFacade
{
    public static function prepareForSale(VehicleInterface $vehicle)
    {
        $registration = new Registration($vehicle);
        echo $registration->allocateLicenseNumber();
        echo $registration->allocateLicensePlate();

        echo Documentation::printBrochureVehicle($vehicle);
        echo $vehicle->cleanInterior();
        echo $vehicle->cleanExterior();
        echo $vehicle->polishWindows();
        echo $vehicle->takesForTestDrive();
    }

}
