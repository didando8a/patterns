<?php

namespace Didando8a\Patterns\Entity;

class ElectricWindow
{
    private $open;

    public function __construct()
    {
        $this->open = false;
    }

    public function isOpen() : bool
    {
        return $this->open;
    }

    public function isClosed() : bool
    {
        return !$this->open;
    }

    public function openWindow() : self
    {
        if ($this->isClosed()) {
            $this->open = true;
            echo "Window opened\n";
        }

        return $this;
    }

    public function closeWindow() : self
    {
        if ($this->isOpen()) {
            $this->open = true;
            echo "Window closed\n";
        }

        return $this;
    }
}
