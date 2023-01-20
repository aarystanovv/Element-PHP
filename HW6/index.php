<?php

require_once 'Helpers.php';
require_once 'Person.php';
require_once 'Driver.php';
require_once 'Engine.php';
require_once 'Car.php';

$driver = new Driver(35, 'Шумахер', 2);
pre($driver);
echo $driver;

$engine = new Engine(230, 'Yamaha');
pre($engine);
echo $engine;

$car = new Car('Toyota', 'легковая', 1500, $driver, $engine);
pre($car);
echo $car;

$lorry = new Lorry('Toyota', 'грузовик', 1500, $driver, $engine);
pre($lorry);
echo $lorry;

$sportCar = new SportCar('Toyota', 'гоночный', 1500, $driver, $engine);
pre($sportCar);
echo $sportCar;

$sportCar->start();
$sportCar->turnLeft();
$sportCar->turnRight();
$sportCar->stop();