<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEmailHandler;

class ServiceEmailHandler extends AbstractEmailHandler
{
    protected function matchingWords()
    {
        return ["service", "repair"];
    }

    protected function handleHere()
    {
        return "Email handled by the service department";
    }
}
