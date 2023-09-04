<form action="result.php" method="post">

    <label for="name">Введите свое имя:</label>
    <input name = "name" id ="name" type="text">

    <label for="surname">Введите свою фамилию:</label>
    <input name = "surname" id ="surname" type="text">

    <label for="age">Введите свой возраст</label>
    <input name = "age" value= <?= $_POST['celsium'] ?? '0'?> id ="age" type="number">

    <label for="flag">Вы работаете?</label>
    <input type="checkbox" name="flag" id="">

    <label for="flag">Сколько у вас детей?</label>
    <input type="radio" name="radio" id="" value="0">
    <input type="radio" name="radio" id="" value="1-2">
    <input type="radio" name="radio" id="" value="3 и более">
    
    <input type="submit">
</form>


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


