<?php

namespace Didando8a\Patterns\Abstracts;


abstract class AbstractItem
{
    private $description;
    private $cost;

    public function __construct($description, $cost)
    {
        $this->description = $description;
        $this->cost = $cost;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCost()
    {
        return $this->cost;
    }

    abstract function addItem(self $item);
    abstract function removeItem(self $item);
    abstract function getItems();

    function __toString()
    {
        return $this->description . ". Cost: " . $this->getCost();
    }
}
