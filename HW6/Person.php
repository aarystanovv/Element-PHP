<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';

class Person{
    public String $fullName;
    private int $age;

    public function __construct($age, $fullName)
    {
        $this->age = $age;
        $this->fullName = $fullName;
    }

    public function __toString(){
        return "$this->fullName; $this->age";
    }
}

$person = new Person(31, 'Temirlan');
