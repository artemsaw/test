<?php
//require при ошибке не выполняется дальше
//include при ошибке не выполняется дальше


$strName = 'Artom';
$numNumber = 12;
$flSomeFloat = 3.14;

$numOne = $numTwo = $numThree = 3;

$strAndreyName = 'Andrey';
$strArturName = 'Artur';
$strSomeName; //NULL;
$someYearsOld = mt_rand(33, 56);

echo "$strAndreyName + $strArturName"; // выведет Andrey + Artur
echo "<br>";
echo '$strAndreyName + $strArturName'; // выведет $strAndreyName + $strArturName
echo "<br>";
echo "$strAndreyName is $someYearsOld's yeras old";
echo "<br>";
?>