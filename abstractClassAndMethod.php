<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Abstract class and method
*/
abstract class Animal{
    private $type;
    public function __construct($type){
        $this->type = $type;
    }
    abstract public function info();
}

class Human extends Animal{
    public function info(){
        echo "<h1>I am human</h1> </br>";
    }
}


$human = new Human("Human");
$human->info();

?>