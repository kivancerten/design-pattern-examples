<?php

include "SingletonCarFactory.php";
include "Car.php";

$car1 = SingletonCarFactory::getInstance();
$car2 = SingletonCarFactory::getInstance();
$car3 = SingletonCarFactory::getInstance();

$car1->brand = 'mazda';

var_dump($car1, $car2, $car3);
