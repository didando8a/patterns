<?php

namespace Didando8a\Patterns\Entity;

class CarController
{
    private $model;
    private $view;

    public function __construct(CarModel $model, CarView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function submitPressed($carType, $engineSize, $colour)
    {
        $this->model->addCarToStock($carType, $engineSize, $colour);

        $this->view->getOutput();
    }

}
