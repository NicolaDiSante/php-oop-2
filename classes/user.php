<?php

class User{
  public $name;
  public $surname;
  public $img;
  public static $id;
  public $level=0;

  public function __construct($_name, $_surname, $_img){

    $this->name = $_name;
    $this->surname = $_surname;
    $this->img = $_img;
    self::$id++;
  }
  public function Stampa(){
    return "L'utente " .$this->name ." " .$this->surname ." è un utente non premium e di conseguenza  di livello " .$this->level ;
  }

}

?>