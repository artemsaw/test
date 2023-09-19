<?php

$data = [1, 2, 3];

$data2 = [
    'x' => 1,
    'y' => 2,
    'z' => 3,
];

$data3 = '[
    "x",
    "y",
    "z"
]';

$json_obj = '{
    "a": 1,
    "b": 2,
    "c": 3
}';

$json = json_encode($data2);
$my_jsone_decode = json_decode($json_obj);

//$json_obj При преобразовании объектов JSON есть нюансы. Дело в том, что они преобразуются не в ассоциативные массивы PHP, а в объекты PHP.

var_dump($my_jsone_decode);

echo "<br>";

$json_ex_1 = '{
    "user": {
        "name": "john",
        "surn": "smit"
    },
    "city": "London"
}';

$my_jsone_decode_2 = json_decode($json_ex_1);

echo $my_jsone_decode_2->user->name . " " . $my_jsone_decode_2->user->surn . " " .$my_jsone_decode_2->city;

echo "<br>";

$json_ex_2 ='{
    "ru": ["пн", "вт", "ср"],
    "en": ["mn", "tu", "wd"]
}';

$json_ex_2_decode = json_decode($json_ex_2);


echo($json_ex_2_decode->ru[2]);
echo "<br>";
foreach($json_ex_2_decode->en as $item){
    echo $item . " ";
}

echo "<br>";

//Можно сделать так, чтобы объекты JSON преобразовывались в ассоциативные массивы в PHP. Для этого нужно второй параметр функции json_decode установить в значение true.

$json_expl_1 = '{
    "ru": ["пн", "вт", "ср"],
    "en": ["mn", "tu", "wd"]
}';


$json_expl_1_decode = json_decode($json_expl_1, true);

echo $json_expl_1_decode['ru'][1];

$json_expl_2 = [1, 2, 3];
	$json_expl_2  = json_encode($data);
	
	header('Content-Type: application/json');
	echo $json_expl_2;

$json_wrong = '["a", "b", "c",]';

$json_wrong_decode = json_decode($json_wrong);

var_dump($json_wrong_decode);

$error = json_last_error(); //Так как возникала ошибка, то json_last_error при вызове выдаст номер этой ошибки:

echo "<br>";

switch (json_last_error()) {
    case JSON_ERROR_NONE:
        echo 'ошибок нет';
    break;
    case JSON_ERROR_DEPTH:
        echo 'достигнута максимальная глубина стека';
    break;
    case JSON_ERROR_STATE_MISMATCH:
        echo 'некорректные разряды или несоответствие режимов';
    break;
    case JSON_ERROR_CTRL_CHAR:
        echo 'некорректный управляющий символ';
    break;
    case JSON_ERROR_SYNTAX:
        echo 'синтаксическая ошибка, некорректный JSON';
    break;
    case JSON_ERROR_UTF8:
        echo 'некорректные символы UTF-8, возможно неверно закодирован';
    break;
    default:
        echo 'неизвестная ошибка';
    break;
}

?>