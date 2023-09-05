<?php

session_start();
echo session_id();

if(!isset($_SESSION['test']))
{
    $_SESSION['test'] = 1;
} else {
    $_SESSION['test']++;
}

echo $_SESSION['test'];

?>