<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Constructor and Destructor
*/

class Car{
    public function __construct(){
        echo "I'm constructor.</br>";
    }
    public function __destruct(){
        echo "I'm destructor.</br>";
    }
}

$car = new Car();

?>