<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Person.php';


class Driver extends Person {
    public int $experience;

    public function __construct($experience)
    {
        $this->experience = $experience;
    }

    public function __toString()
    {
        return "$this->experience";
    }

}

$driver = new Driver(25);
$person = new Person(31, 'Temirlan');