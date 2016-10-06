<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class YearSetup implements ClockSetupInterface
{
    private $clockSetup;
    private $year;

    public function __construct(ClockSetup $clockSetup)
    {
        $this->clockSetup = $clockSetup;
        $this->year = date('Y');
    }

    public function previousValue() : ClockSetupInterface
    {
        $this->year--;

        return $this;
    }

    public function nextValue() : ClockSetupInterface
    {
        $this->year++;

        return $this;
    }

    public function selectValue() : ClockSetupInterface
    {
        $this->clockSetup->setState($this->clockSetup->getMonthSetupState());

        return $this;
    }

    public function getInstructions()
    {
        echo "Please set the year\n";
    }

    public function getSelectedValue()
    {
        return $this->year;
    }
}
