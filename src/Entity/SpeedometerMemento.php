<?php

namespace Didando8a\Patterns\Entity;

class SpeedometerMemento
{
    const SPEED_FILE = 'speedofile.data';

    public function __construct(Speedometer $speedometer)
    {
        file_put_contents(self::SPEED_FILE, serialize($speedometer));
    }

    public function restoreState()
    {
        return unserialize(file_get_contents(self::SPEED_FILE));
    }


}
