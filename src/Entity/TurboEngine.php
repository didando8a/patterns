<?php

namespace Didando8a\Patterns;

use Didando8a\Patterns\Abstracts\AbstractEngine;

class TurboEngine extends AbstractEngine
{
    public function __construct($size)
    {
        parent::__construct($size, true);
    }
}
