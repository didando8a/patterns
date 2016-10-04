<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\VehicleInterface;
use Traversable;

class VanRange implements \IteratorAggregate
{
    private $vans = [];

    public function addElement(VehicleInterface $van) : self
    {
        $this->vans[] = $van;

        return $this;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->vans);
    }

}
