<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Entity\StandardGearboxStrategy;
use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\GearboxStrategyInterface;
use Didando8a\Patterns\Interfaces\VehicleInterface;

abstract class AbstractCar extends AbstractVehicle
{
    private $gearboxStrategy;

    public function __construct(EngineInterface $engine, $color = VehicleInterface::UNPAINTED)
    {
        parent::__construct($engine, $color);

        $this->gearboxStrategy = new StandardGearboxStrategy();
    }

    public function setGearboxStrategy(GearboxStrategyInterface $gearbox)
    {
        $this->gearboxStrategy = $gearbox;
    }

    public function getGearboxStrategy() : GearboxStrategyInterface
    {
        return $this->gearboxStrategy;
    }

    public function setSpeed(int $speed)
    {
        $this->gearboxStrategy->ensureCorrectGear($this->getEngine(), $speed);
    }
}
