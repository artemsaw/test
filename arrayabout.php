<?php

$arr1122 = array("One", "two", "three");
$arr = [1, 2, 3];
list($one, $two, $three) = $arr;
echo $one, $two, $three. "<br>";

echo "<br>";

//Многомерный массив

$myFriends = 
[
    'andrey' => [
        'name' => "Andrey",
        'surname' => "Mlohe",
        'age' => "34"
    ],

    'serega' => [
        'name' => "Serega",
        'surname' => "KJHGhvbjk",
        'age' => "45"
    ],
];

$someFriend = $myFriends['serega']; 

echo "<pre>";
print_r($someFriend);
echo "</pre>";

$arr3['time'] = 3;

echo "<br>";
echo "Интерполяция массивов" . "<br>";
echo "Сейчас у нас $arr3[time] утра" . "<br>";
echo "Моему другу Сереге сегодня {$myFriends['serega']['age']} лет" . "<br>";
echo "<br>";

//Перебор for
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i] + 1 . "<br>";
}

$andrey = [
    'name' => "Andrey",
    'surname' => "Mlohe",
    'age' => "34"
];

//Перебор foreach
echo "<br>";
echo "Перебор ассоциативных массивов" . "<br>";


foreach ($andrey as $key => $value) { 
    if($value == 34)
    {
        echo $value . "? Are you serios? Goaway oldman" . "<br>";
    } 
    else echo $value . "<br>";
}

echo "<br>";
echo "Перебор простых массивов" . "<br>";

foreach ($arr as $value) {
    echo $value . "<br>";
}

?>