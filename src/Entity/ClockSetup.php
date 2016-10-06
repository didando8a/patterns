<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ClockSetupInterface;

class ClockSetup
{
    private $yearState;
    private $monthState;
    private $dayState;
    private $hourState;
    private $minuteState;
    private $finishedState;

    private $currentState;

    public function __construct()
    {
        $this->yearState = new YearSetup($this);
        $this->monthState = new MonthSetup($this);
        $this->dayState = new DaySetup($this);
        $this->hourState = new HourSetup($this);
        $this->minuteState = new MinuteSetup($this);

        $this->setState($this->yearState);
    }

    public function setState(ClockSetupInterface $state)
    {
        $this->currentState = $state;

    }

    public function rotateKnobLeft() : self
    {
        $this->currentState->previousValue();

        return $this;
    }

    public function rotateKnobRight() : self
    {
        $this->currentState->nextValue();

        return $this;
    }

    public function pushKnob() : self
    {
        $this->currentState->selectValue();

        return $this;
    }


    public function getYearSetupState() : ClockSetupInterface
    {
        return $this->yearState;
    }

    public function getMonthSetupState() : ClockSetupInterface
    {
        return $this->monthState;
    }

    public function getDaySetupState() : ClockSetupInterface
    {
        return $this->dayState;
    }

    public function getHourSetupState() : ClockSetupInterface
    {
        return $this->hourState;
    }

    public function getMinuteSetupState() : ClockSetupInterface
    {
        return $this->minuteState;
    }

    public function getFinishedSetupState() : ClockSetupInterface
    {
        return $this->finishedState;
    }

    public function getSelectedDate()
    {
        $date = mktime($this->hourState->getSelectedValue(),
            $this->minuteState->getSelectedValue(), 0,
            $this->monthState->getSelectedValue(),
            $this->dayState->getSelectedValue(),
            $this->yearState->getSelectedValue());

        return date('r', $date);
    }
}
