<?php

namespace Didando8a\Patterns;

use Didando8a\Patterns\Abstracts\AbstractVan;
use Didando8a\Patterns\Interfaces\EngineInterface;

class Boxvan extends AbstractVan
{
    public function __construct(EngineInterface $engine, $color)
    {
        parent::__construct($engine, $color);
    }
}
