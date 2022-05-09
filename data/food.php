<?php
include_once '/products.php';

class Food extends Products{

    public $prodDate;
    public $expDate;
    //La specie di animale domestico a cui è destinato il prodotto
    public $targetedAnimal;
    public $ingredients;
    public $FeedingDirections;

    function __construct($prodDate,$expDate,$targetedAnimal,$ingredients,$FeedingDirections=null){
        $this->prodDate=$prodDate;
        $this->expDate=$expDate;
        $this->targetedAnimal=$targetedAnimal;
        $this->ingredients=$ingredients;
        $this->FeedingDirections=$FeedingDirections;
    }
}


?>