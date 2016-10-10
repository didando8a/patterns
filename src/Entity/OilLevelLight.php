<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\WarningLightInterface;

class OilLevelLight implements WarningLightInterface
{
    private $on = false;

    public function turnOn()
    {
        $this->on = true;

        echo "Lights turned on", PHP_EOL;
    }

    public function turnOff()
    {
        $this->on = false;

        echo "Lights turned off", PHP_EOL;
    }

    public function isOn() : bool
    {
        return $this->on;
    }
}
