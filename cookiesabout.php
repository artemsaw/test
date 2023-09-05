<?php

setcookie('test-1', 'Значение 1');


/*setcookie('test-1', 'Значение 1', array(
	'expires' => time() + 60 * 60 * 24 * 30,
	'path' => '/',
	'domain' => 'example.com', 
	'secure' => true,  
	'httponly' => true,  
	'samesite' => 'None'
));

$name – название;

$value – значение;

$expires – время жизни (метка времени Unix), если 0 или пропустить аргумент, cookie будут действовать до закрытия 
браузера.

$path – путь к директории, из которой будут доступны cookie. Если задать '/', cookie будут доступны во всем домене.

$domain – домен, которому доступны cookie. Например, 'www.example.com' сделает cookie доступными только в нём. Для того, чтобы сделать cookie доступными для всего домена и поддоменов, нужно указать имя домена 'example.com'.

$secure – при true значения cookie будут доступны только по HTTPS.

$httponly – при true, cookie будут доступны только через HTTP-протокол.*/

?>



<a href="aboutcookies.php">click</a>







<?php 

if (isset($_COOKIE['test-1'])) {
	echo $_COOKIE['test-1'];
}

?>