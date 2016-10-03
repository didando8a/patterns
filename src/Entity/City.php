<?php

namespace Didando8a\Patterns\Entity;

class City
{
    private $name;
    private $latitude;
    private $longitude;

    public function __construct($name, $latitude, $longitude)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    function __toString()
    {
        return $this->getName();
    }
}
