<?php

namespace Didando8a\Patterns\Entity;

class EngineManagementSystem
{
    private $ignition;
    private $gearBox;
    private $accelerator;
    private $brake;

    private $currentSpeed;

    public function __construct()
    {
        $this->currentSpeed = 0;
    }

    public function registerIgnition(Ignition $ignition) : self
    {
        $this->ignition = $ignition;

        return $this;
    }

    public function registerGearBox(GearBox $gearBox) : self
    {
        $this->gearBox = $gearBox;

        return $this;
    }

    public function registerAccelerator(Accelerator $accelerator) : self
    {
        $this->accelerator = $accelerator;

        return $this;
    }

    public function registerBrake(Brake $brake) : self
    {
        $this->brake = $brake;

        return $this;
    }

    public function ignitionTurnedOn() : self
    {
        

        return $this;
    }

    public function ignitionTurnedOff()
    {

    }

    public function gearBoxEnabled()
    {

    }

    public function gearBoxDisabled()
    {

    }

    public function gearChanged()
    {

    }

    public function acceleratorEnabled()
    {

    }

    public function acceleratorDisabled()
    {

    }

    public function acceleratorPressed()
    {

    }

    public function brakeEnabled()
    {

    }

    public function brakeDisabled()
    {

    }

    public function brakePressed()
    {

    }

    public function brakeReleased()
    {

    }
}
