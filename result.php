Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.
Вам <?php echo $_POST['age']; ?> лет. <br>
<?php

if (isset($_POST['flag']))
{
    echo "Рабочий человек" . "<br>";
} else 
{
    echo "Лодырь" . "<br>";
}

if ($_POST['radio'] == 0)
{
    echo "Часики-то тикают" . "<br>";
}
elseif ($_POST['radio'] == "1-2")
{
    echo "Нормально" . "<br>";
}
else 
{
    echo "Вай молодец" . "<br>";
}

echo $_POST['testselect'] . "-й вариант". "<br>";

?>
