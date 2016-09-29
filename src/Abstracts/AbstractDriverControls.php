<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Interfaces\EngineInterface;

class AbstractDriverControls
{
    private $engine;

    /**
     * AbstractDriverControllers constructor.
     * @param EngineInterface $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function ignitionOn()
    {
        echo "Starting engine...\n";

        $this->engine->start();
    }

    public function ignitionOff()
    {
        echo "Turning engine off...\n\n";

        $this->engine->stop();
    }

    public function accelerate()
    {
        echo "Speeding up...\n";

        $this->engine->increasePower();
    }

    public function brake()
    {
        echo "Brake pressed...\n";

        $this->engine->decreasePower();
    }

}
