<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEngine;

class StandardEngine extends AbstractEngine
{
    public function __construct($size)
    {
        parent::__construct($size, false);
    }
}
