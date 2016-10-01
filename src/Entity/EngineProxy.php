<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\DiagnosticToolInterface;
use Didando8a\Patterns\Interfaces\EngineInterface;

class EngineProxy implements EngineInterface
{
    private $engine;

    public function __construct(EngineFactory $engineFactory, $size, $turbo = false)
    {
        $this->engine = $engineFactory->createEngine($turbo, $size);
    }

    public function getSize()
    {
        return $this->engine->getSize();
    }

    public function isTurbo()
    {
        return $this->engine->isTurbo();
    }

    public function diagnose(DiagnosticToolInterface $diagnosticTool)
    {
        return $diagnosticTool->runDiagnosis($this->engine);
    }

    function __toString()
    {
        return get_class($this->engine);
    }
}
