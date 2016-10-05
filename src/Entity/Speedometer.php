<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractObservable;

class Speedometer extends AbstractObservable
{
    private $currentSpeed;
    private $previousSpeed;

    public function __construct()
    {
        parent::__construct();

        $this->currentSpeed = 0;
        $this->previousSpeed = 0;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed) : AbstractObservable
    {
        $this->currentSpeed = $currentSpeed;
        $this->setChange();
        $this->notifyObservers();

        return $this;
    }

    /**
     * @return int
     */
    public function getPreviousSpeed(): int
    {
        return $this->previousSpeed;
    }
}
