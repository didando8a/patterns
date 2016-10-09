<?php

namespace Didando8a\Patterns\Interfaces;

interface VisitableInterface
{
    public function acceptEngineVisitor(EngineVisitorInterface $engineVisitor);
}
