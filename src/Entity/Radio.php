<?php

namespace Didando8a\Patterns\Entity;

class Radio
{
    const MIN_VOLUME = 0;
    const MAX_VOLUME = 10;
    const DEFAULT_VOLUME = 5;

    private $on;
    private $volume;

    public function __construct()
    {
        $this->on = false;
        $this->volume = self::DEFAULT_VOLUME;
    }

    public function isOn() : bool
    {
        return $this->on;
    }

    public function getVolume() : int
    {
        return $this->volume;
    }

    public function on() : self
    {
        $this->on = true;

        return $this;
    }

    public function off() : self
    {
        $this->on = false;

        return $this;
    }

    public function volumeUp() : self
    {
        if ($this->isOn() && $this->getVolume() < self::MAX_VOLUME) {
            $this->volume++;
            echo "Volume Up\n";
        }

        return $this;
    }

    public function volumeDown() : self
    {
        if ($this->isOn() && $this->getVolume() > self::MIN_VOLUME) {
            $this->volume--;
            echo "Volume down\n";
        }

        return $this;
    }
}
