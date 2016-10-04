<?php

namespace Didando8a\Patterns\Entity;

class EngineManagementSystem
{
    /** @var  Ignition $ignition */
    private $ignition;
    /** @var  GearBox $gearBox */
    private $gearBox;
    /** @var  Accelerator $accelerator */
    private $accelerator;
    /** @var  Brake $brake */
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
        $this->gearBox->enable();
        $this->accelerator->enable();
        $this->brake->enable();

        return $this;
    }

    public function ignitionTurnedOff() : self
    {
        $this->gearBox->disable();
        $this->accelerator->disabled();
        $this->brake->disabled();

        return $this;
    }

    public function gearBoxEnabled() : self
    {
        echo "Gear Box enabled...\n";

        return $this;
    }

    public function gearBoxDisabled() : self
    {
        echo "Gear Box disabled...\n";

        return $this;
    }

    public function gearChanged($gear) : self
    {
        echo sprintf("Gear changed to %s...\n", $gear);

        return $this;
    }

    public function acceleratorEnabled() : self
    {
        echo "Accelerator enabled...\n";

        return $this;
    }

    public function acceleratorDisabled() : self
    {
        echo "Accelerator disabled...\n";

        return $this;
    }

    public function acceleratorPressed() : self
    {
        echo "Accelerator pressed...\n";

        $this->brake->disabled();

        while ($this->currentSpeed < $this->accelerator->getSpeed()) {
            $this->currentSpeed++;

            if ($this->currentSpeed <= 10) {
                $this->gearBox->setGear(GearBox::FIRST);
            } elseif ($this->currentSpeed <= 20) {
                $this->gearBox->setGear(GearBox::SECOND);
            } elseif ($this->currentSpeed <= 30) {
                $this->gearBox->setGear(GearBox::THIRD);
            } elseif ($this->currentSpeed <= 50) {
                $this->gearBox->setGear(GearBox::FOURTH);
            } else {
                $this->gearBox->setGear(GearBox::FITH);
            }

            if (!$this->brake->isEnabled()) {
                $this->brake->enable();
            }
        }

        return $this;
    }

    public function brakeEnabled() : self
    {
        echo "Brake enabled...\n";

        return $this;
    }

    public function brakeDisabled() : self
    {
        echo "Brake disabled...\n";

        return $this;
    }

    public function brakePressed() : self
    {
        $this->accelerator->disabled();
        $this->currentSpeed = 0;

        return $this;
    }

    public function brakeReleased() : self
    {
        $this->gearBox->setGear(GearBox::FIRST);
        $this->accelerator->enable();

        return $this;
    }
}
