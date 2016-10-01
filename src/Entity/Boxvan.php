<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractVan;
use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

class Boxvan extends AbstractVan
{
    public function __construct(EngineInterface $engine, $color = VehicleInterface::UNPAINTED)
    {
        parent::__construct($engine, $color);
    }

    public function getPrice()
    {
        return 10000;
    }
}
