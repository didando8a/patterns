<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class MinuteSetup implements ClockSetupInterface
{
    private $clockSetup;
    private $minute;

    public function __construct(ClockSetup $clockSetup)
    {
        $this->clockSetup = $clockSetup;
        $this->minute = date('i');
    }

    public function previousValue() : ClockSetupInterface
    {
        $this->minute--;

        return $this;
    }

    public function nextValue() : ClockSetupInterface
    {
        $this->minute++;

        return $this;
    }

    public function selectValue() : ClockSetupInterface
    {
        $this->clockSetup->setState($this->clockSetup->getFinishedSetupState());

        return $this;
    }

    public function getInstructions()
    {
        echo "Plase set thi minutes\n";
    }

    public function getSelectedValue()
    {
        return $this->minute;
    }
}
