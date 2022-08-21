<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic: Date and Time
*/


// Date
$todaysDate_year_first = date("Y/m/d");
echo "Todays date is: {$todaysDate_year_first} </br>";

$todaysDate_month_first = date("m/d/Y");
echo "Todays date is: {$todaysDate_month_first} </br>";

$todaysDate_day_first = date("d/m/Y");
echo "Todays date is: {$todaysDate_day_first} </br>";


//time
date_default_timezone_set("Asia/Dhaka"); //setting timezone to dhaka.
$time =  date("h:i:sa"); // h- hour in 12hr formate,i- minutes s-second a-AM/PM
echo "The time is:{$time}";

?>