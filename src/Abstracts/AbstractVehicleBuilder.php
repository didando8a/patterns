<?php

namespace Didando8a\Patterns\Abstracts;

abstract class AbstractVehicleBuilder
{
    public function buildBody() {}
    public function buildBoot() {}
    public function buildChassis() {}
    public function buildPassengerArea() {}
    public function buildReinforcedStorageArea() {}
    public function buildWindows() {}

    abstract function getVehicle();
}
