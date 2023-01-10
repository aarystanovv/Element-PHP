<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';

use Car;
class Engine{
    public int $power;
    public string $company;

    public function __construct($power, $company)
    {
        $this->power = $power;
        $this->company = $company;
    }
}

$obj = new Engine(225, "BMW");