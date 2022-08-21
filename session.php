<?php
/*
* author: Md. Shofiul Islam
*         Brainstation-23
* Topic: Session
*/
session_start();
if(isset($_SESSION['visit'])){
    $_SESSION['visit']++;
}else{
    $_SESSION['visit'] = 1;
}
echo "<h1>You have refreshed this page {$_SESSION['visit']} times.</h1>";
?>