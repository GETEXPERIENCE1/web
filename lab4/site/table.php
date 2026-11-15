<?php

function getTable($width, $height, $color) {
    echo "<table border='1' cellpadding='10'>";

    for ($i = 0; $i < $height; $i++) {
        echo "<tr>";

        for ($j = 0; $j < $width; $j++) {
            echo "<td style='background-color: $color'>";
            echo "&nbsp;";
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table_width = abs((int)$_POST["cols"]);
    $table_height = abs((int)$_POST["rows"]);
    $table_color = trim(strip_tags($_POST["color"]));
}

$table_width = ($table_width ?? 0) ? $table_width : 10;
$table_height = ($table_height ?? 0) ? $table_height : 10;
$table_color = ($table_color ?? '') ? $table_color : '#ffff00';

?>

<!-- Область основного контента -->

<form action="<?= htmlspecialchars($_SERVER["REQUEST_URI"]) ?>" method="post">

    <label>Количество колонок:</label>
    <br>
    <input name="cols" type="text" value="<?= $table_width ?>">
    <br>

    <label>Количество строк:</label>
    <br>
    <input name="rows" type="text" value="<?= $table_height ?>">
    <br>

    <label>Цвет:</label>
    <br>
    <input name="color" type="color" value="<?= htmlspecialchars($table_color) ?>" list="listColors">

    <datalist id="listColors">
        <option value="#ff0000">
        <option value="#00ff00">
        <option value="#0000ff">
    </datalist>

    <br>
    <br>

    <input type="submit" value="Создать">

</form>

<br>

<!-- Таблица -->

<?php getTable($table_width, $table_height, $table_color); ?>

<!-- Конец области основного контента -->
