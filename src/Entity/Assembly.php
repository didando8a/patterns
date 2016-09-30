<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractItem;

class Assembly extends AbstractItem
{
    private $items;

    public function __construct($description)
    {
        parent::__construct($description, 0);
        $this->items = [];
    }

    /**
     * @param AbstractItem $item
     * @return $this
     */
    function addItem(AbstractItem $item){
        array_push($this->items, $item);

        return $this;
    }

    /**
     * @param AbstractItem $item
     * @return $this
     */
    function removeItem(AbstractItem $item){
        $found = false;
        $iteration = 0;

        while (!$found && $iteration < count($this->items)) {
            if ($this->items[$iteration] === $item) {
                $found = true;
                unset($this->items[$iteration]);
            }

            $iteration++;
        }

        return $this;
    }

    /**
     * @return AbstractItem[]
     */
    function getItems() : array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        $total = 0;
        
        foreach ($this->items as $item) {
            $total += $item->getCost();
        }

        return $total;
    }

}
