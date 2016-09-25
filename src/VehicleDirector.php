<?php

namespace Didando8a\Patterns;

use Didando8a\Patterns\Abstracts\AbstractVehicleBuilder;

abstract class VehicleDirector
{
    public abstract function build(AbstractVehicleBuilder $vehicleBuilder);
}
