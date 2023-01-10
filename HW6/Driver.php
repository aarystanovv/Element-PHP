<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/Extra/Helpers.php';

use Car;
class Driver extends Person {
    public int $experience;

    public function __construct($experience)
    {
        $this->experience = $experience;
    }

}