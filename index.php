<?php
ini_set('error_reporting', E_ALL);
//include 'variable.php';
//require_once "classabout.php";

?>

<form action="" method="post">
    <label for="celsium">Переведите градусы из цельсия в фаренгейт:</label>
    <input type="text" name="celsium" id="celsium" 
    value= <?= $_POST['celsium'] ?? '0'?>>
    <input type="submit">
</form>



