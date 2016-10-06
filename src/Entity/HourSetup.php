<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class HourSetup implements ClockSetupInterface
{
    private $clockSetup;
    private $hour;

    public function __construct(ClockSetup $clockSetup)
    {
        $this->clockSetup = $clockSetup;
        $this->hour = date('G');
    }

    public function previousValue() : ClockSetupInterface
    {
        $this->hour--;

        return $this;
    }

    public function nextValue() : ClockSetupInterface
    {
        $this->hour++;

        return $this;
    }

    public function selectValue() : ClockSetupInterface
    {
        $this->clockSetup->setState($this->clockSetup->getHourSetupState());

        return $this;
    }

    public function getInstructions()
    {
        echo "Please set the Hour\n";
    }

    public function getSelectedValue()
    {
        return $this->hour;
    }
}
