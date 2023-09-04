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

echo "<br>";
echo "Перебор многомерных массивов в PHP" . "<br>";


$arrMany = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
];

foreach($arrMany as $sub){
    foreach($sub as $elem){
        echo $elem . ", ";
    }
}


echo "<br>";
echo "Перебор многомерных ассооциативных массивов" . "<br>";

$users = [
    [
        'name'   => 'user1',
        'age'    => 31,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 32,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 33,
        'salary' => 3000,
    ],
];


foreach ($users as $user ) 
{
    echo $user['name'] . ":" . $user['age'] . ":" . $user['salary'] . "<br>";
}



?>