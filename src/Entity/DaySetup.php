<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class DaySetup implements ClockSetupInterface
{
    private $clockSetup;
    private $day;

    public function __construct(ClockSetup $clockSetup)
    {
        $this->clockSetup = $clockSetup;
        $this->day = date('j');
    }

    public function previousValue() : ClockSetupInterface
    {
        $this->day--;

        return $this;
    }

    public function nextValue() : ClockSetupInterface
    {
        $this->day++;

        return $this;
    }

    public function selectValue() : ClockSetupInterface
    {
        $this->clockSetup->setState($this->clockSetup->getHourSetupState());

        return $this;
    }

    public function getInstructions()
    {
        echo "Please set the day\n";
    }

    public function getSelectedValue()
    {
        return $this->day;
    }
}
