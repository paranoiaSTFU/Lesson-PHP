<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цыклы</title>
</head>
<body>
    <?php
// Цыклы
// Цыкл for выполняется пока условие верно
// В данных условиях цыкл будет повторятся 10 раз. В конце каждой итерации цыкла значение 'i' буедет увеличиваться на 1.
for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
}

// Цыкл while выполняется пока условие верно, но необходимо вручную корректировать проверяемое значение в условии.
$j = true;
$number=0;
while($j){
    if($number==10){
        echo "Переменная number равна: " . $number . "<br>";
        $j=false;
    }
    else{
        $number++;
    }
}
// Цыкл do while выполняется 1 раз, затем проверяет условие и если условие верно то продолжает выполнять итерации,
// но необходимо вручную корректировать проверяемое значение в условии.
$x = 100;
do{
    echo $x . "<br>";
}while($x < 50);
// Оператор 'break' позволяет полностью выйти из цыкла.
for($i = 10; $i <= 20; $i+=2){
    if($i > 15)
        break;

    echo $i. "<br>";
}
// Оператор 'continue' позволяет выйти из цыкла и пропустить итерацию.
// Данный цыкл выведет все нечетные числа от 10 до 20.
for($i = 10; $i <= 20; $i++){
    if($i % 2 == 0)
        continue;

    echo $i . "<br>";
}
// Массивы и цыклы
$arr_1 = [5,67,234,234,654,5678568,11,0,"stroka"];
// Вывод каждого элемента массива
for($i = 0; $i < count($arr_1); $i++){
    echo "Элемент массива " . ($i + 1) . " равен: " . $arr_1[$i]. "<br>";
}
$arr_2 = [5,67,234,234,654,5678568,11,0];
// Вывод каждого элемента массива
for($i = 0; $i < count($arr_2); $i++){
    $arr_2[$i]*=2;
    echo "Элемент массива " . ($i + 1) . " равен: " . $arr_2[$i]. "<br>";
}
    ?>
</body>
</html>