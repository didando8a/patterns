<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractCar;
use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

class Coupe extends AbstractCar
{
    public function __construct(EngineInterface $engine, $color = VehicleInterface::UNPAINTED)
    {
        parent::__construct($engine, $color);
    }
}
