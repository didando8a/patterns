<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\VehicleInterface;

class CarRange implements \Iterator
{
    private $index;
    private $cars = [];

    public function addElement(VehicleInterface $car) : self
    {
        $this->cars[] = $car;

        return $this;
    }

    public function current()
    {
        return $this->cars[$this->index];
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->cars[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

}
