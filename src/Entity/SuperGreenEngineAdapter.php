<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractEngine;

class SuperGreenEngineAdapter extends AbstractEngine
{
    private $superEngine;

    public function __construct(SuperGreenEngine $superGreenEngine)
    {
        $this->superEngine = $superGreenEngine;
        parent::__construct($superGreenEngine->getEngineSize(), false);
    }

}
