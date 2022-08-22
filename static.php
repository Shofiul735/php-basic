<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Static method and properties
*/


class Person{
    static $count = 10;
    public static greetings(){
        echo "<h1>Hello</h1> </br>";
    }

}


// static methods and properties can be access without creating an object.
echo Person::$count
echo Person::greetings();

?>