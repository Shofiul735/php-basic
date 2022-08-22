<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Interface
*/

interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow </br>";
  }
}

class Dog implements Animal {
    public function makeSound() {
      echo "Woff Woff </br>";
    }
  }

$animal = new Cat();
$animal->makeSound();
$dog = new Dog();
$dog->makeSound();


?>