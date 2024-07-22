<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Условные операторы</title>
</head>
<body>
    <?php
    $number = 11;
    $isHasHouse = true;
        // условный оператор if 
        if($number == 15 && $isHasHouse == true){
            echo "Условие верно, переменная равна числу 15 и isHasHouse равна true" . "<br>";
        } else if($number == 177 || $isHasHouse){
            echo "Условие верно, переменная равна числу 177 или isHasHouse равна true". "<br>";
        } else if($number <= 17 || $isHasHouse){
            echo "Условие верно, переменная меньше или равна числу 17 или isHasHouse равна true". "<br>";
        } else {
            echo "Условие не верно";
        }


        $str_1 = "word";
        // условный оператор switch 
        switch($str_1){
            case "4":
                echo "Переменная со значением 5". "<br>";
                break;
            case "77":
                echo "Переменная со значением 77". "<br>";
            break;
            case "word":
                echo "Переменная со значением 'word'". "<br>";
            break;
            default:
                echo "Default.". "<br>";
}
    ?>
</body>
</html>