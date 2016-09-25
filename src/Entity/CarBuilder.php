<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractCar;
use Didando8a\Patterns\Abstracts\AbstractVehicleBuilder;

class CarBuilder extends AbstractVehicleBuilder
{
    private $carInProgress;

    public function __construct(AbstractCar $abstractCar)
    {
        $this->carInProgress = $abstractCar;
    }

    public function buildBody()
    {
        parent::buildBody();
    }

    public function buildBoot()
    {
        parent::buildBoot();
    }

    public function buildChassis()
    {
        parent::buildChassis();
    }

    public function buildPassengerArea()
    {
        parent::buildPassengerArea();
    }

    public function buildWindows()
    {
        parent::buildWindows();
    }


    function getVehicle()
    {
        return $this->carInProgress;
    }

}
