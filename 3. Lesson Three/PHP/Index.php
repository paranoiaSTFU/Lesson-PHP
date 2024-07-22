<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Математические действия</title>
</head>
<body>
    <?php
    $a = 21;
    $b = 11;
    // Математические действия
    echo  ($a + $b) . "<br>"; // Сложение
    echo  ($a - $b) . "<br>"; // Вычитание
    echo  ($a * $b) . "<br>"; // Умножение
    echo  ($a / $b) . "<br>"; // Деление
    echo  ($a % $b) . "<br>"; // Остаток от деления
    // Укороченные записи

    $x = 10;
    $x +=10;
    echo "<br>" . $x;
    $x++; // равнозначно записи "$x += 1;"
    echo "<br>". $x;

    // Библиотека Math
    echo "<br>" . M_PI;          // Число Pi
    echo "<br>" . M_E;           // Число e
    echo "<br>" . abs(-22);      // Модуль числа
    echo "<br>" . ceil(7.78);    // Округление в большую сторону
    echo "<br>" . floor(7.78);   // Округление в меньшую сторону
    echo "<br>" . round(3.38272);// Округление по логике (если больше 5, то в большую, если меньше 5, то в меньшую)
    echo "<br>" . mt_rand(1,10); // Случайное число в диапозоне
    ?>
</body>
</html>