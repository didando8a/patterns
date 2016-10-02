<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\Command;

class VolumeUpCommand implements Command
{
    private $radio;

    public function __construct(Radio $radio)
    {
        $this->radio = $radio;
    }

    public function execute()
    {
        $this->radio->volumeUp();
    }

    public function undo()
    {
        $this->radio->volumeDown();
    }
}
