<?php
include_once __DIR__ . '/Products.php';

class Food extends Products{

    public $prodDate;
    public $expDate;
    //La specie di animale domestico a cui è destinato il prodotto
    public $targetedAnimal;
    public $ingredients;
    public $FeedingDirections;

    function __construct($prodDate,$expDate,$targetedAnimal,$ingredients,$FeedingDirections=null){
        parent::__construct($name,$price,$weight,$manufacturer);
        $this->prodDate=$prodDate;
        $this->expDate=$expDate;
        $this->targetedAnimal=$targetedAnimal;
        $this->ingredients=$ingredients;
        $this->FeedingDirections=$FeedingDirections;
    }
}


?>