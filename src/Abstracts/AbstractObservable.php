<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\ObserverInterface;

abstract class AbstractObservable
{
    private $observers = [];
    private $changed;

    public function __construct()
    {
        $this->changed = false;
    }

    public function addObserver(ObserverInterface $observer) : self
    {
        $this->observers[] = $observer;

        return $this;
    }

    public function deleteObserver(Observer $observer) : self
    {
        $found = false;

        for ($i = 0; $i < count($this->observers) && !$found; $i++) {
            if ($this->observers[$i] === $observer) {
                $found = true;
                unset($this->observers[$i]);
            }
        }

        return $this;
    }

    public function deleteObservers() : self
    {
        $this->observers = [];

        return $this;
    }

    public function notifyObservers() : self
    {
        if ($this->hasChanged()) {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }

            $this->clearChanged();
        }

        return $this;
    }

    public function hasChanged() : bool
    {
        return $this->changed;
    }

    public function setChange() : self
    {
        $this->changed = true;

        return $this;
    }

    protected function clearChanged()
    {
        $this->changed = false;
    }

    abstract public function setCurrentSpeed(int $currentSpeed) : self ;
    abstract public function getCurrentSpeed() : int;
}
