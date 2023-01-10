<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Car.php';


class Engine extends Car {
    public int $power;
    public string $company;

    public function __construct($power, $company)
    {
        $this->power = $power;
        $this->company = $company;
    }

    public function __toString(): string
    {
        return "$this->power; $this->company";
    }
}

$engine = new Engine(225, "BMW");
$driver = new Driver(25);
$car = new Car('BMW X5', 'crossover', 2860, $driver, $engine);
