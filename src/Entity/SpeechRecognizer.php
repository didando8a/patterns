<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\Command;

class SpeechRecognizer
{
    /** @var  Command $upCommand */
    private $upCommand;
    /** @var  Command $downCommand */
    private $downCommand;

    public function setCommands(Command $upCommand, Command $downCommand)
    {
        $this->upCommand = $upCommand;
        $this->downCommand = $downCommand;
    }

    public function hearUpSpoken()
    {
        $this->upCommand->execute();
    }

    public function hearDownSpoken()
    {
        $this->downCommand->execute();
    }
}
