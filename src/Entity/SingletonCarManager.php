<?php

namespace Didando8a\Patterns\Entity;

class SingletonCarManager
{
    private static $singleton = null;

    private function __construct()
    {

    }

    public static function createManager()
    {
        if (!self::$singleton) {
            self::$singleton = new self();
            echo "Creating a new " . self::class . " instance", PHP_EOL;
        } else {
            echo "The instance already exists", PHP_EOL;
        }

        return self::$singleton;
    }
}
