<?php

namespace Didando8a\Patterns\Entity;



use Didando8a\Patterns\Abstracts\AbstractEngineFactoryMethod;
use Didando8a\Patterns\Interfaces\EngineInterface;

class EngineFactory extends AbstractEngineFactoryMethod
{
    public function createEngine($turbo, $size) : EngineInterface
    {
        $engine = null;

        if ($turbo) {
            $engine =  new TurboEngine($size);
        } else {
            $engine = new StandardEngine($size);
        }

        return $engine;
    }
}
