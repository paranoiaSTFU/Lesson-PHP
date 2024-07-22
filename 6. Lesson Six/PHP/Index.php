<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы данных. Одномерные и многомерные</title>
</head>
<body>
    <?php
        // Создание массива
        $arry = array(1, 2, 435, 435, 2, 34, 78, 90, 0);
        // Индексация с 0
        echo $arry[3] . "<br>"; // Выведет на экран 435
        // Нет строгой типизации в массиве
        $arr = array(1, 2, "asd", 0.5, 0, true);
        echo $arr[2] . "<br>"; // Выведет "asd"

        // Ассоциативные массивы
        $List = ["Age" => 21, "Name" => "Artem", "Hobby" => "Dota_2"];
        $List["Age"] = 21.3;
        echo $List["Age"] ."<br>";

        // Многомерные массивы
        $Matrix = 
        [
            [1, 2, 3],
            ["qwe","asd","zxc"],
            [32.1, true, 'F']
        ];
        echo $Matrix[1][2] ."<br>";

    ?>
</body>
</html>