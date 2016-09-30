<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractItem;

class Part extends AbstractItem
{
    /**
     * @var AbstractItem[] $items
     */
    private $items;

    public function __construct($description, $cost)
    {
        parent::__construct($description, $cost);
        $this->items = [];
    }

    public function addItem(AbstractItem $item)
    {
    }

    public function removeItem(AbstractItem $item)
    {
    }

    public function getItems()
    {
        return $this->items;
    }

}
