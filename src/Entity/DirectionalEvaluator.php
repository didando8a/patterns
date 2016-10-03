<?php

namespace Didando8a\Patterns\Entity;

class DirectionalEvaluator
{
    private $cities = [];

    public function __construct()
    {
        $this->cities["arbedeen"] = new City("Arbedeen", 57.15, -2.15);
        $this->cities["belfast"] = new City("Belfast", 54.62, -5.93);
        $this->cities["birmingham"] = new City("Birmingham", 52.42, -1.92);
        $this->cities["dublin"] = new City("Dublin", 53.33, -6.25);
        $this->cities["edinburgh"] = new City("Edinburgh", 55.92, -3.02);
        $this->cities["glasgow"] = new City("Glasgow", 55.83, -4.25);
        $this->cities["london"] = new City("London", 51.53, -0.08);
        $this->cities["liverpool"] = new City("Liverpool", 53.42, -3.0);
        $this->cities["manchester"] = new City("Manchester", 53.5, -2.25);
        $this->cities["southampton"] = new City("Southampton", 50.9, -1.38);
    }

    public function evaluate($route)
    {
        $expressionStack = [];
        $routeArray = explode(' ', $route);

        foreach ($routeArray as $token) {
            if (isset($this->cities[$token])) {
                $expressionStack[] = new CityExpression($this->cities[$token]);
            } elseif ($token === "northerly") {
                $expressionStack[] = new MostNortherlyExpression($this->loadExpressions($expressionStack));
            } elseif ($token === "southerly") {
                $expressionStack[] = new MostSoutherlyExpression($this->loadExpressions($expressionStack));
            } elseif ($token === "westerly") {
                $expressionStack[] = new MostWesterlyExpression($this->loadExpressions($expressionStack));
            } elseif ($token === "easterly") {
                $expressionStack[] = new MostEasterlyExpression($this->loadExpressions($expressionStack));
            }
        }

        return array_pop($expressionStack)->interpret();
    }

    private function loadExpressions(array &$expressionsStack) : array
    {
        $expressions = [];

        while (!empty($expressionsStack)) {
            $expressions[] = array_pop($expressionsStack);
        }

        return $expressions;
    }
}
