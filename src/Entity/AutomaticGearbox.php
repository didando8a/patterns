<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\GearboxInterface;

class AutomaticGearbox implements GearboxInterface
{
    public function getCurrentGear()
    {
        echo "Current Gear for automatic gearbox", PHP_EOL;
    }
}
