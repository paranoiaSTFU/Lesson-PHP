<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные и типы данных</title>
</head>
<body>
    <?php
    define("MyAge",21); // константа
    $number = 0;    // int
    $number = 2.1;  // float
    $bool = false;  // boolean
    $strVAR = "Переменная"; // string
    $strR = " равна";
    $char = " : ";
    echo $strVAR ." number ". $strR . $char . $number;
    
    //отсутствие строгой типизации данных
    $a = 5;
    $b = "10";
    echo '<br>' . ($a + $b);
    // Ну все же лучше преобразовывать
    echo '<br>' . ($a + intval($b));
    echo '<br> Мой возраст: '. MyAge;

    ?>
</body>
</html>