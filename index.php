<?php
session_start();

date_default_timezone_set("Pacific/Naur");

if(!isset($_SESSION['times']))
{
    $_SESSION['times'] = date("H:i:s"); 
} else {
    $_SESSION['times'];
}

echo $_SESSION['times'];

unset($_SESSION['test']); //


//session_destroy();

?>





