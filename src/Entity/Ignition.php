<?php

namespace Didando8a\Patterns\Entity;

class Ignition
{
    private $mediator;
    private $on;

    public function __construct(EngineManagementSystem $mediator)
    {
        $this->mediator = $mediator;
        $this->on = false;

        $this->mediator->registerIgnition($this);
    }

    public function start()
    {
        $this->on = true;
        $this->mediator->ignitionTurnedOn();
    }

    public function stop()
    {
        $this->on = false;
        $this->mediator->ignitionTurnedOff();
    }

    /**
     * @return boolean
     */
    public function isOn(): bool
    {
        return $this->on;
    }

}
