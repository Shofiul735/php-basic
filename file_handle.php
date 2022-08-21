<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic: variable
*/

// File read
$fileRead = fopen("input.txt","r") or die("Unable to open");
$text = fread($fileRead,filesize('input.txt'));
echo $text;

// File write
$fileWrite = fopen("output.txt","a") or die("Unable to open");
fwrite($fileWrite,$text);
fclose($fileRead);
fclose($fileWrite);


?>