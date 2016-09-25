<?php

namespace Didando8a\Patterns;

use Didando8a\Patterns\Abstracts\AbstractVehicleBuilder;

class CarDirector extends VehicleDirector
{
    public function build(AbstractVehicleBuilder $vehicleBuilder)
    {
        $vehicleBuilder->buildBody();
        $vehicleBuilder->buildChassis();
        $vehicleBuilder->buildPassengerArea();
        $vehicleBuilder->buildBoot();
        $vehicleBuilder->buildWindows();

        return $vehicleBuilder->getVehicle();
    }
}
