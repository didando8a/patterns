<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractCar;
use Didando8a\Patterns\Interfaces\VehicleInterface;
use Didando8a\Patterns\Entity\Saloon;
use Didando8a\Patterns\Entity\Sport;
use Didando8a\Patterns\Entity\Coupe;

class CarModel
{
    const DB_FILE = "cars_in_stock.data";

    const SALOON = "Saloon";
    const COUPE = "Coupe";
    const SPORT = "Sport";

    const ENGINE_1300 = 1300;
    const ENGINE_1600 = 1600;
    const ENGINE_2000 = 2000;

    private $carTypeAvailable = [
        CarModel::SALOON, CarModel::COUPE, CarModel::SPORT
    ];

    private $colorsAvailable = [
        VehicleInterface::BLUE, VehicleInterface::BLACK,
        VehicleInterface::RED, VehicleInterface::WHITE
    ];

    private $enginesAvailable = [
        CarModel::ENGINE_1300, CarModel::ENGINE_1600, CarModel::ENGINE_2000
    ];

    private $carsInStock = [];

    public function __construct()
    {
        if (file_exists(self::DB_FILE)) {
            $this->carsInStock = unserialize(file_get_contents(self::DB_FILE));
        }
    }

    public function getCarTypesAvailable()
    {
        return $this->carTypeAvailable;
    }

    public function getEngineSizesAvailable()
    {
        return $this->enginesAvailable;
    }

    public function getColoursAvailable()
    {
        return $this->colorsAvailable;
    }

    public function getCarsInStock()
    {
        return $this->carsInStock;
    }

    public function addCarToStock($carType, $engineSize, $color)
    {
        $engine = new StandardEngine($engineSize);
        $class = __NAMESPACE__ . '\\' . $carType;
        /** @var VehicleInterface $carType */
        $carType = new $class($engine, $color);

        $this->carsInStock[] = $carType;

        file_put_contents(CarModel::DB_FILE, serialize($this->carsInStock));
    }
}
