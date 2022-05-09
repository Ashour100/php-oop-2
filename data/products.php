<?php



class Products{
    public $name;
    public $price;
    public $weight;
    public $manufacturer;
    
    function __construct($name,$price,$weight,$manufacturer){
        $this->name=$name;
        $this->price=$price;
        $this->weight=$weight;
        $this->manufacturer=$manufacturer;
    };

};
?>