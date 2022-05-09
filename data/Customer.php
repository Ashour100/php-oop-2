<?php
include_once __DIR__ . '/CreditCard.php';

class Customer{
    public $name;
    public $lastName;
    public $age;
    public $creditCard;
    public $isRegistered;
    public $discount;

    public function __construct($name, $lastName, $age, $creditCard, $isRegistered){
        $this->name = $name;
        $this->last_name = $lastName;
        $this->age = $age;
        $this->setCreditCard($creditCard);
        $this->isRegistered = $isRegistered;
        $this->discount = $this->setDiscount();
    }

    public function setDiscount(){
        if ($this->isRegistered) 
            $this->discount = 20;
        else
            $this->discount = 0;
        return $this->discount;
    }

    public function setCreditCard($creditCard){
        if (!$creditCard instanceof CreditCard) return false;
        $this->creditCard = $creditCard;
    }
}


?>