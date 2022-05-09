<?php


class Customer{
    public $name;
    public $lastName;
    public $age;

    public function __construct($name, $lastName, $age)
    {
        $this->name = $name;
        $this->last_name = $lastName;
        $this->age = $age;
    }
}


?>