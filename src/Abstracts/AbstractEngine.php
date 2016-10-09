<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Entity\Camshaft;
use Didando8a\Patterns\Entity\Piston;
use Didando8a\Patterns\Entity\SparkPlug;
use Didando8a\Patterns\Interfaces\EngineInterface;
use Didando8a\Patterns\Interfaces\EngineVisitorInterface;

abstract class AbstractEngine implements EngineInterface
{
    private $size;
    private $turbo;

    private $camshaft;
    private $piston;
    private $sparkPlugs = [];

    public function __construct($size, bool $turbo)
    {
        $this->size = $size;
        $this->turbo = $turbo;

        $this->camshaft = new Camshaft();
        $this->piston = new Piston();
        for ($i = 0; $i < 4; $i++) {
            $this->sparkPlugs[$i] = new SparkPlug();
        }
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isTurbo() : bool
    {
         $this->isTurbo();
    }

    public function acceptEngineVisitor(EngineVisitorInterface $engineVisitor)
    {
        $this->camshaft->acceptEngineVisitor($engineVisitor);
        $this->piston->acceptEngineVisitor($engineVisitor);
        /** @var SparkPlug $sparkPlug */
        foreach ($this->sparkPlugs as $sparkPlug) {
            $sparkPlug->acceptEngineVisitor($engineVisitor);
        }

        $engineVisitor->visitEngine($this);
    }

    public function __toString()
    {
        return get_class($this) . ' (' . (string)$this->size . ')';
    }
}
