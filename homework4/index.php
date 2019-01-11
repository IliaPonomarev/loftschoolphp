<?php

require_once 'Car.php';
require_once 'Engine.php';

$car = new Car("AT", 50);
$car->Movement(500, 20, 'вперед');