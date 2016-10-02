<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEmailHandler;

class GeneralEnquiriesEmailHandler extends AbstractEmailHandler
{
    protected function matchingWords()
    {
        return [];
    }

    protected function handleHere()
    {
        return "Email handled by general enquiries";
    }
}
