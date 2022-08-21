<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic:  Cookie
*/
setcookie('username',"James Albert",time()+30); //this cookie will distroy after 30 seconds.

$username = $_COOKIE['username']; // retrieving the user name from cookie. 
echo "<h1> Welcome to the page, <i>{$username}</i></h1>";

?>