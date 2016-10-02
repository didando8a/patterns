<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEmailHandler;

class SalesEmailHandler extends AbstractEmailHandler
{
    protected function matchingWords()
    {
        return ["buy", "purchase"];
    }

    protected function handleHere()
    {
        return "Email handled by sales deparment";
    }
}
