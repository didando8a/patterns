<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractCar;
use Didando8a\Patterns\Abstracts\AbstractVehicleBuilder;

class VanBuilder extends AbstractVehicleBuilder
{
    private $varInProgress;

    public function __construct(AbstractCar $abstractCar)
    {
        $this->varInProgress = $abstractCar;
    }

    public function buildBody()
    {
        parent::buildBody();
    }

    public function buildChassis()
    {
        parent::buildChassis();
    }

    public function buildReinforcedStorageArea()
    {
        parent::buildReinforcedStorageArea();
    }

    public function buildWindows()
    {
        parent::buildWindows();
    }


    function getVehicle()
    {
        return $this->varInProgress;
    }

}
