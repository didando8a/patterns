<?php

namespace Didando8a\Patterns\Entity;

class Accelerator
{
    private $mediator;
    private $enabled;
    private $speed;

    public function __construct(EngineManagementSystem $mediator)
    {
        $this->mediator = $mediator;
        $this->enabled = false;
        $this->speed = 0;
        $this->mediator->registerAccelerator($this);
    }

    public function enable()
    {
        $this->enabled =  true;
        $this->mediator->acceleratorEnabled();
    }

    public function disabled() : self
    {
        $this->enabled = false;
        $this->mediator->acceleratorDisabled();

        return $this;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function accelerateToSpeed(int $speed) : self
    {
        if ($this->enabled) {
            $this->speed = $speed;
            $this->mediator->acceleratorPressed();
        }

        return $this;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}
