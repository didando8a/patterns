<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\GearboxInterface;

class ManualGearBox implements GearboxInterface
{
    public function getCurrentGear()
    {
        echo "Current gear for MANUAL gearbox", PHP_EOL;
    }

}
