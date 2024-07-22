<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строковые операции</title>
</head>
<body>
    <?php
    $string = "Hello";
    echo "Var: " . $string . "<br>";
    echo "Var: $string" . "<br>";
    echo "<input type=\"text\">" . "<br>";
    echo strlen($string). "<br>"; // Длинна строки.
    echo trim("      qwe         "). "<br>"; // удаляет все пробелы.
    echo strtolower($string). "<br>"; // Все в нижний регистр.
    echo strtoupper($string). "<br>"; // Все в верхний регистр.
    echo md5($string). "<br>"; // Кэширование MD5.

    ?>
</body>
</html>