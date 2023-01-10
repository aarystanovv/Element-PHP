<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Driver.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Engine.php';

class Car {
    public String $marka;
    public String $carClass;
    public float $weight;
    public Driver $driver;
    public Engine $engine;

    public function __construct($marka, $carClass, $weight, $driver, $engine)
    {
        $this->marka = $marka;
        $this->carClass = $carClass;
        $this->weight = $weight;
        $this->driver = $driver;
        $this->engine = $engine;
    }

    public function start(){
        pre("Поехали");
    }

    public function stop(){
        pre("Останавливаемся");
    }

    public function turnRight(){
        pre("Поворот направо");
    }

    public function turnLeft(){
        pre("Поворот налево");
    }

//    public function __toString(){
//        return "$this->marka; $this->carClass; $this->weight; $this->driver; $this->engine";
//    }

}

class Lorry extends Car{
    public int $carrying;
}

class SportCar extends Car{
    public float $speed;
}



$driver = new Driver(25);
$engine = new Engine(225, 'BMW');
$car = new Car('BMW X5', 'crossover', 2860, $driver, $engine);

$car->start();
pre($car);
$car->turnRight();
pre($car);