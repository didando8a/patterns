<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEmailHandler;

class SpamEmailHandler extends AbstractEmailHandler
{
    protected function matchingWords()
    {
        return ['viagra', 'pills', 'medicine'];
    }

    protected function handleHere()
    {
        return "This is a span Email";
    }
}
