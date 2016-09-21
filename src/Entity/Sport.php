<?php

namespace Didando8a\Patterns;

use Didando8a\Patterns\Abstracts\AbstractCar;
use Didando8a\Patterns\Interfaces\EngineInterface;

class Sport extends AbstractCar
{
    public function __construct(EngineInterface $engine, $color)
    {
        parent::__construct($engine, $color);
    }
}
