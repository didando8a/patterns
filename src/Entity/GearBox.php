<?php

namespace Didando8a\Patterns\Entity;

class GearBox
{
    const NEUTRAL = 'N';
    const FIRST = '1';
    const SECOND = '2';
    const THIRD = '3';
    const FOURTH = '4';
    const FITH = '5';
    const REVERSE = 'R';

    private $mediator;
    private $enabled;
    private $currentGear;

    /**
     * GearBox constructor.
     */
    public function __construct(EngineManagementSystem $mediator)
    {
        $this->mediator = $mediator;
        $this->enabled = false;
        $this->currentGear = self::NEUTRAL;

        $this->mediator->registerGearBox($this);
    }

    public function enable()
    {
        $this->enabled = true;
        $this->mediator->gearBoxEnabled();
    }

    public function disable()
    {
        $this->enabled = false;
        $this->mediator->gearBoxDisabled();
    }

    public function isEnable()
    {
        return $this->enabled;
    }

    public function setGear($gear) : self
    {
        $this->currentGear = $gear;

        return $this;
    }

    public function getGear()
    {
        return $this->currentGear;
    }
}
