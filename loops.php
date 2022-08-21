<?php
/*
* author: Md. Shofiul Islam
* Brainstation-23
* Topic: Loops
*/
$arr = [1,2,3,4,5];
echo "For loop:";
for($i = 0;$i<sizeof($arr);$i++){
    echo "{$arr[$i]} ";
}

echo "</br>While loop:";
$i = 0;
while($i<sizeof($arr)){
    echo "{$arr[$i]} ";
    $i++;
}

echo "</br> do while loop:";
$i = 0;
do{
    echo "{$arr[$i]} ";
    $i++;  
}while($i<sizeof($arr));


echo "</br> For each loop:";
foreach($arr as $index=>$item){
    echo "</br>value {$item},and index {$index}";
}

?>