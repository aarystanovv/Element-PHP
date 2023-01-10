<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';

class Person{
    private int $age;
    public String $fullName;

    public function __construct($age, $fullName)
    {
        $this->age = $age;
        $this->fullName = $fullName;
    }
}

$person = new Person(31, 'Temirlan');