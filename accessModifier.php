<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Access Modifier
*/

class Person{
    /*
        Access modifiers are:
            1. Public     -> access from everywhere
            2. Private    -> only in the class
            3. Protected  -> within class and child class
    */
    private $name;    // only class methods can access this
    private $message; // only class methods can access this

    public function __construct($name){
        $this->name = $name;
    }
    protected function message(){
        $this->message = "Hello, {$this->name}";
    }
    public function __destruct(){
        $this->message();
        echo $this->message;
    }
}

$person = new Person("Alen");

?>