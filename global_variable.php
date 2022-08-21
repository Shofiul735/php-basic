<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic: variable
*/

$a = 10;

function addNumberWithA($b){
    global $a; // declearing the golbal variable
    return $a+$b;
}

$sum = addNumberWithA(10);
echo $sum;
?>