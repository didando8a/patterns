<?php

namespace Didando8a\Patterns\Interfaces;

interface VehicleInterface
{
    const UNPAINTED = 'Unpainted';
    const BLUE = 'Blue';
    const BLACK = 'Black';
    const GREEN = 'Green';
    const RED = 'Red';
    const SILVER = 'Silver';
    const WHITE = 'White';
    const YELLOW = 'Yellow';

    public function getEngine();
    public function getColor();
    public function paint($color);

    public function cleanInterior();
    public function cleanExterior();
    public function polishWindows();
    public function takesForTestDrive();
}
