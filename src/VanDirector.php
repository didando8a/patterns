<?php

namespace Didando8a\Patterns;

use Didando8a\Patterns\Abstracts\AbstractVehicleBuilder;

class VanDirector extends VehicleDirector
{
    public function build(AbstractVehicleBuilder $vehicleBuilder)
    {
        $vehicleBuilder->buildBody();
        $vehicleBuilder->buildChassis();
        $vehicleBuilder->buildReinforcedStorageArea();
        $vehicleBuilder->buildWindows();

        return $vehicleBuilder->getVehicle();
    }
}
