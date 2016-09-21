<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

abstract class AbstractVan extends AbstractVehicle
{
    public function __construct(EngineInterface $engine, $color = VehicleInterface::UNPAINTED)
    {
        parent::__construct($engine, $color);
    }
}
