<?php

namespace Didando8a\Patterns\Entity;

class CarView
{
    private $model;

    public function __construct(CarModel $model)
    {
        $this->model = $model;
        $_SESSION['view'] = serialize($this);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getOutput()
    {

        $_SESSION['view'] = serialize($this);
        header('Location: Template/CarViewTemplate.php');
        require_once __DIR__ . "/../Template/CarViewTemplate.php";
        die();
    }
}
