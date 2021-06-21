<?php

require_once __DIR__ . "/../traits/type.php";

class Product{
  use Type;
  public $name;
  public $price;
  public $img ="";
  public $review = "";
  public static $counter = 0;

  public function __construct($_name, $_price, $_img, $_review, $_type, $_available){

    $this->name = $_name;
    $this->price = $_price;
    $this->img = $_img;
    $this->review = $_review;
    $this->type = $_type;
    $this->available = $_available;
    self::$counter++;
  }

  public function stampa(){
    if($this->available){
      return "Il prodotto " .$this->name." è di tipo " .$this->type ." ed è disponibile" ." costa " .$this->price ."€ e ha la seguente recensione: ". $this->review;
    }else{
      return "Il prodotto " .$this->name." è di tipo " .$this->type ." ma non è disponibile; " ." costerebbe " .$this->price ."€ e ha la seguente recensione: ". $this->review;
    }
    
  }

}

?>