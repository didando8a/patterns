<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Didando8a\Patterns\Entity\Part;
use Didando8a\Patterns\Entity\Assembly;

$nut = new Part('Nut', 5);
$bolt = new Part('Bolt', 9);
$panel = new Part('Panel', 35);

$gizmo = new Assembly('Gizmo');
$gizmo->addItem($panel)->addItem($nut)->addItem($bolt);


$widget = new Assembly('Widget');
$widget->addItem($gizmo)->addItem($nut);

echo sprintf("%s\n", $nut);
echo sprintf("%s\n", $bolt);
echo sprintf("%s\n", $panel);
echo sprintf("%s\n", $gizmo);
echo sprintf("%s\n", $widget);