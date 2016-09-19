<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;

abstract class AbstractEngine implements EngineInterface
{
    private $size;
    private $turbo;

    public function __construct($size, bool $turbo)
    {
        $this->size = $size;
        $this->turbo = $turbo;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isTurbo() : bool
    {
         $this->isTurbo();
    }

    public function __toString()
    {
        return get_class($this) . ' (' . (string)$this->size . ')';
    }
}
