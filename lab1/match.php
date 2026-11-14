php
<?php
// ЗАДАНИЕ 1
$day = (int) date('N');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкция match</title>
</head>
<body>
    <h1>Конструкция match</h1>
    <?php
    // ЗАДАНИЕ 3
    echo match ($day) {
        1, 2, 3, 4, 5 => 'Это рабочий день',
        6, 7 => 'Это выходной день',
        default => 'Неизвестный день',
    };
    ?>
</body>
</html>
