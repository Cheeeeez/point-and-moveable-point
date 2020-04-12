<?php
include_once 'Point.php';
include_once 'MovablePoint.php';

$movablePoint = new MovablePoint(10,10,20);
echo $movablePoint->toString() . "<br>";
$movablePoint->move() . "<br>";
echo $movablePoint->toString();


