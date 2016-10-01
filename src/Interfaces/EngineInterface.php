<?php

namespace Didando8a\Patterns\Interfaces;

interface EngineInterface
{
    public function getSize();
    public function isTurbo();

    public function diagnose(DiagnosticToolInterface $diagnosticTool);
}
