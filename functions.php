<?php
/*
* author: Md. Shofiul Islam
* Brainstation-23
* Topic: Function
*/

//Function
function sayMyName(){
    echo "Md. Shofiul Islam";
}
sayMyName();
//Arrow function
$sum = fn ($a,$b) => $a+$b;

echo "Sum of a and b is:{$sum(2,3)}";

?>