<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\WarningLightInterface;

class BreakFluidLight implements WarningLightInterface
{
    private $on = false;

    public function turnOn()
    {
        $this->on = true;

        echo "Breaks turned on", PHP_EOL;
    }

    public function turnOff()
    {
        $this->on = false;

        echo "Breaks turned off", PHP_EOL;
    }

    public function isOn() : bool
    {
        return $this->on;
    }
}
