<?php

namespace Didando8a\Patterns\Entity;

class Speedometer
{
    private $currentSpeed;
    private $previousSpeed;

    public function __construct()
    {
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

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

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
