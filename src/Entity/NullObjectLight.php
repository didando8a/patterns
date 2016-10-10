<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\WarningLightInterface;

class NullObjectLight implements WarningLightInterface
{
    public function turnOn()
    {
    }

    public function turnOff()
    {
    }

    public function isOn()
    {
        return false;
    }

}
