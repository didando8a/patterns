<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\Command;

class WindowDownCommand implements Command
{
    private $window;

    public function __construct(ElectricWindow $window)
    {
        $this->window = $window;
    }

    public function execute()
    {
        $this->window->openWindow();
    }

    public function undo()
    {
        $this->window->closeWindow();
    }
}
