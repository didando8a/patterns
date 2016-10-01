<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\DiagnosticToolInterface;

class EngineDiagnosticTool implements DiagnosticToolInterface
{
    public function runDiagnosis($engine)
    {
        return "Engine diagnosis complete for" . $engine;
    }


}
