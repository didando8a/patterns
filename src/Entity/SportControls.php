<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractDriverControls;
use Didando8a\Patterns\Interfaces\EngineInterface;

class SportControls extends AbstractDriverControls
{
    public function __construct(EngineInterface $engine)
    {
        parent::__construct($engine);
    }

    public function accelerateHard()
    {
        echo "Turbo Activated...\n";

        $this->accelerate();
        $this->accelerate();
    }

}
