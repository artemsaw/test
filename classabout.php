<?php
class MathClass 
{
    public $name;
    public $surname;
    public $age;

    public static $grade = 4;
}


$maria = new MathClass();

$maria->name = "Maria ";
$maria->age = 12;
$maria->surname = "Ivanova";


echo $maria->name;
echo MathClass::$grade;


?>



