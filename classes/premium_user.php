<?php

class PremiumUser extends User{
  public $level=0;

  public function __construct($_name, $_surname,$_img, $_level){

    $this->name = $_name;
    $this->surname = $_surname;
    $this->img = $_img;
    $this->level = $_level;
    self::$id++;
  }

  public function Stampa(){
    return "L'utente " .$this->name ." " .$this->surname ." è un utente premium di livello " .$this->level ;
  }

}

?>