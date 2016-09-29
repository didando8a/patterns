<?php

namespace Didando8a\Patterns\Entity;

class SuperGreenEngine
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function getEngineSize()
    {
        return $this->size;
    }

    public function __toString()
    {
        return get_class($this) . ' ' . (string)$this->size;
    }
}
