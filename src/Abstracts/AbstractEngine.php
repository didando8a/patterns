<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;

abstract class AbstractEngine implements EngineInterface
{
    private $size;
    private $turbo;
    private $running;
    private $power;

    public function __construct($size, bool $turbo)
    {
        $this->size = $size;
        $this->turbo = $turbo;
        $this->running = false;
        $this->power = 0;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isTurbo() : bool
    {
         $this->isTurbo();
    }

    public function start()
    {
        $this->running = true;

        return $this;
    }

    public function stop()
    {
        $this->running = false;
        $this->power = 0;

        return $this;
    }

    public function increasePower()
    {
        if ($this->running && $this->power < 10) {
            $this->power++;
        }

        return $this;
    }

    public function decreasePower()
    {
        if ($this->running && $this->power > 0) {
            $this->power--;
        }

        return $this;
    }


    public function __toString()
    {
        return get_class($this) . ' (' . (string)$this->size . ')';
    }
}
