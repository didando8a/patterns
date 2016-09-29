<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractDriverControls;
use Didando8a\Patterns\Interfaces\EngineInterface;

class StandarControls extends AbstractDriverControls
{
    public function __construct(EngineInterface $engine)
    {
        parent::__construct($engine);
    }

}
