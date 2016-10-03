<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ExpressionInterface;

class CityExpression implements ExpressionInterface
{
    private $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }


    public function interpret()
    {
        return $this->city;
    }
}
