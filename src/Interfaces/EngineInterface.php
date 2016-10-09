<?php

namespace Didando8a\Patterns\Interfaces;

interface EngineInterface extends VisitableInterface
{
    public function getSize();
    public function isTurbo();
}
