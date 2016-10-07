<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\GearboxStrategyInterface;

class StandardGearboxStrategy implements GearboxStrategyInterface
{
    public function ensureCorrectGear(EngineInterface $engine, $speed)
    {
        $engineSize = $engine->getSize();
        $turbo = $engine->isTurbo();

        echo "Working out correct gear at " . $speed . " mph for STANDARD gearbox\n";
    }

}
