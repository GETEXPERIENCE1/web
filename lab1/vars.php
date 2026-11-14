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
    <p>
    Меня зовут:<?= $name ?><br>
    Мне <?=$age?> года <br>
    Тип переменной name: <?=var_dump($name)?> <br>
    Тип переменной age: <?=var_dump($age)?>
    </p>

    <?php
    // ЗАДАНИЕ 2
    // Удаляем переменные
    unset($name, $age);
    ?>

</body>
</html>
