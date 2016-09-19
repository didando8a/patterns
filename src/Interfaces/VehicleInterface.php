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
}
