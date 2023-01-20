<?php

class Person{
    public String $fullName;
    public int $age;

    public function __construct($age, $fullName)
    {
        $this->age = $age;
        $this->fullName = $fullName;
    }

    public function __toString(){
        return "$this->fullName; $this->age";
    }
}

