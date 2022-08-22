<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Traits for multi inheritace
*/

trait ProgrammingLanguage1{
    public function JS(){
        echo "JavaScript is the best programming language ever created. </br>";
    }
}
trait ProgrammingLanguage2{
    public function CplusPlus(){
        echo "C++ is the most powerful oop language. </br>";
    }
}

class ProgrammingLanguage{
    use ProgrammingLanguage1;
    use ProgrammingLanguage2;
}

$pl = new ProgrammingLanguage();
$pl->JS();
$pl->CplusPlus();
?>