<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\CarModel;
use Didando8a\Patterns\Entity\CarView;
use Didando8a\Patterns\Entity\CarController;

session_start();

$model = new CarModel();
$view = new CarView($model);
$controller = new CarController($model, $view);

if (isset($_POST['submit'])) {
    $controller->submitPressed(filter_input(INPUT_POST, 'selected_car_type'),
        filter_input(INPUT_POST, 'selected_engine_size'),
        filter_input(INPUT_POST, 'selected_colour'));
} else {
    $view->getOutput();
}
