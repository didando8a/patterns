<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\EngineVisitorInterface;
use Didando8a\Patterns\Interfaces\VisitableInterface;

class Camshaft implements VisitableInterface
{
    public function acceptEngineVisitor(EngineVisitorInterface $engineVisitor)
    {
        $engineVisitor->visitCamshaft($this);
    }
}
