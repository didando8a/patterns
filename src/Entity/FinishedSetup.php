<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class FinishedSetup implements ClockSetupInterface
{
    private $clockSetup;

    public function __construct(ClockSetup $clockSetup)
    {
        $this->clockSetup = $clockSetup;
    }

    public function previousValue() : ClockSetupInterface
    {
        return $this;
    }

    public function nextValue() : ClockSetupInterface
    {
        return $this;
    }

    public function selectValue() : ClockSetupInterface
    {
        return $this;
    }

    public function getInstructions()
    {
        echo "Please knob to view selected date";
    }

    public function getSelectedValue()
    {
    }
}
