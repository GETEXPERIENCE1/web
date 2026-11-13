
<?php
// ЗАДАНИЕ 1
$name = 'Роман';
$age = 23;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные и вывод</title>
</head>
<body>
    <h1>Переменные и вывод</h1>

    <?php
    // ЗАДАНИЕ 2

    echo "Меня зовут: $name <br>";
    echo "Мне $age года <br>";

    echo "Тип переменной name: ";
    var_dump($name);

    echo "<br>";

    echo "Тип переменной age: ";
    var_dump($age);

    // Удаляем переменные
    unset($name, $age);
    ?>

</body>
</html>
