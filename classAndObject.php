<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Class and Object
*/

class Person{
    private $name;
    private $age;
    
    function set_name($name){
        $this->name = $name;
    } 
    function set_age($age){
        $this->age = $age;
    }
    function print_info(){
        echo "Name is: {$this->name} </br>";
        echo "Age is: {$this->age} </br>";
    }
}

$person = new Person();
$person->set_name("Alava");
$person->set_age(30);
$person->print_info();

?>