<?php

class Engine {
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
