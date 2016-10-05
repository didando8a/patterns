<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractObservable;
use Didando8a\Patterns\Interfaces\ObserverInterface;

class SpeedMonitor implements ObserverInterface
{
    private $speedToAlert = 70;
    private $speeding = false;

    public function update(AbstractObservable $observable) : ObserverInterface
    {
        $this->speeding = false;

        if ($observable->getCurrentSpeed() > $this->speedToAlert) {
            echo sprintf("Observer triggered on speed: %d\n", $observable->getCurrentSpeed());
            $this->speeding = true;
        }

        return $this;
    }

    public function speeding() : bool
    {
        return $this->speeding;
    }
}
