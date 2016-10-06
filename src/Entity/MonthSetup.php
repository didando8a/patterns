<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class MonthSetup implements ClockSetupInterface
{
    private $clockSetup;
    private $month;

    public function __construct(ClockSetup $clockSetup)
    {
        $this->clockSetup = $clockSetup;
        $this->month = date('n');
    }

    public function previousValue() : ClockSetupInterface
    {
        $this->month--;

        return $this;
    }

    public function nextValue() : ClockSetupInterface
    {
        $this->month++;

        return $this;
    }

    public function selectValue() : ClockSetupInterface
    {
        $this->clockSetup->setState($this->clockSetup->getDaySetupState());

        return $this;
    }

    public function getInstructions()
    {
        echo "Please set a mont\n";
    }

    public function getSelectedValue()
    {
        return $this->month;
    }
    
}
