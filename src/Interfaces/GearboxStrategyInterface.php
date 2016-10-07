<?php

namespace Didando8a\Patterns\Interfaces;

interface GearboxStrategyInterface
{
    public function ensureCorrectGear(EngineInterface $engine, $speed);
}
