<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Interfaces\ExpressionInterface;

class MostWesterlyExpression implements ExpressionInterface
{
    /** @var CityExpression[] $expression */
    private $expression;

    public function __construct(array $expression)
    {
        $this->expression = $expression;
    }

    public function interpret() : City
    {
        $resultingCity = new City("nowhere", -999.99, -999.99);

        foreach ($this->expression as $currentExpression) {
            $currentCity = $currentExpression->interpret();

            if ($currentCity->getLongitude() < $resultingCity->getLongitude()) {
                $resultingCity = $currentCity;
            }
        }

        return $resultingCity;
    }
}
