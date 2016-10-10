<?php

namespace Didando8a\Patterns\Entity;

class GearFactory
{
    const AUTOMATIC = 1;
    const MANUAL = 2;

    public static function create($type)
    {
        if ($type === 1) {
            $factory = new AutomaticGearbox();
        } else {
            $factory = new ManualGearBox();
        }

        return $factory;
    }
}
