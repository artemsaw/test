<?php

//<?php
// require_once "login.php";
// require_once "dbconnect.php";
//
//	$host = 'localhost'; // имя хоста
//	$user = 'root';      // имя пользователя
//	$pass = '';          // пароль
//	$name = 'mydb';      // имя базы данных
//	
//	$link = mysqli_connect($host, $user, $pass, $name);
//	mysqli_query($link, "SET NAMES 'utf8'");
//	
//	$query = 'SELECT * FROM users';
//	$res = mysqli_query($link, $query) or die(mysqli_error($link));
//	var_dump($res);
?>



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect('localhost', 'root', '', 'mydb');

/* Set the desired charset after establishing a connection */

mysqli_set_charset($mysqli, 'utf8mb4');

printf("Success... %s\n", mysqli_get_host_info($mysqli));

$myQuery = "SELECT * FROM `users` WHERE salary > 600";

//$mysqli->query("INSERT INTO users(name, age, salary) VALUES ('user4', 30, 1000)"); INSERT

//$mysqli->query("UPDATE users SET name='user45' WHERE id=8" ); UPDATE

//$mysqli->query("DELETE FROM users WHERE id=8");

$result_fetch = mysqli_fetch_assoc($mysqli->query($myQuery));
$result_normal = $mysqli->query($myQuery);

echo "<pre>";

var_dump($result_fetch);

echo "</pre>";

foreach($result_normal as $row){
    echo  "User name is " . $row['name'] . ", user age is " . $row['age'] . " his salary is " . $row['salary']  . "<br>"; 
}

?>

<?php foreach ($result_normal as $row): ?>
	<p>
		<b><?= $row['name'] ?></b>
		<b><?= $row['age'] ?></b>
		<b><?= $row['salary'] ?></b>
	</p>
<?php endforeach; ?>