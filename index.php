<?php
include_once ('class/MovablePoint.php');
include_once ('class/Point.php');

$movablePoint = new MovablePoint();
$movablePoint->setX(5.6);
echo $movablePoint->getX()."<br>";
$movablePoint->setY(5.6);
echo $movablePoint->getY()."<br>";
$movablePoint->setXY(5.0,5.0);

foreach ($movablePoint ->getXY() as $value):
    echo $value . " "."<br>";
endforeach;

$movablePoint->setSpeed(20,20);
foreach ($movablePoint->getSpeed() as $value):
    echo $value . " "."<br>";
endforeach;

$movablePoint->setMovablePoint(12,26,20,20);
echo $movablePoint->getMovablePoint()."<br>";