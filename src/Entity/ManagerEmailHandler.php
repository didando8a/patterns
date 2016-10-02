<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEmailHandler;

class ManagerEmailHandler extends AbstractEmailHandler
{
    protected function matchingWords()
    {
        return ["complain", "bad"];
    }

    protected function handleHere()
    {
        return "Email handled by manager";
    }
}
