<?php

namespace Didando8a\Patterns\Entity;

class Brake
{
    private $mediator;
    private $enabled;
    private $applied;

    public function __construct(EngineManagementSystem $mediator)
    {
        $this->mediator = $mediator;
        $this->enabled = false;
        $this->applied = false;
        $this->mediator->registerBrake($this);
    }

    public function enable()
    {
        $this->enabled =  true;
        $this->mediator->brakeEnabled();
    }

    public function disabled() : self
    {
        $this->enabled = false;
        $this->mediator->brakeDisabled();

        return $this;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function apply() : self
    {
        if ($this->enabled) {
            $this->applied = true;
            $this->mediator->brakePressed();
        }

        return $this;
    }

    public function release()
    {
        if ($this->enabled) {
            $this->applied = false;
        }
    }
}
