<?php

class Driver extends Person {
    public int $experience;

    public function __construct($age, $fullName, $experience)
    {
        parent::__construct($age, $fullName);
        $this->experience = $experience;
    }

    public function __toString()
    {
        return "$this->fullName, $this->experience, ". $this->age;
    }

}
