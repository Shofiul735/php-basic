<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Inheritance
*/

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    protected function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Mango extends Fruit {
    public function message() {
      echo "Am I a fruit or a Mango? ";
    }
  }

  $mango = new Mango("Mango","Yellow");
  $mango->message();
?>