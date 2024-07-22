<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции. Область видимости.</title>
</head>
<body>
    <?php
    function Hello($Name){
        echo "Hello, " . $Name . "<br>";
    }
    function Summa($a, $b){
        echo  $a + $b ."<br>";
    }
    // статичные переменные
    function click(){
        static $a;
        $a++;
        echo "Эта функция была вызвана: ". $a ." раз.<br>";
    }
    // возврат суммны всех элементов массива
    function SummElArr($arr){
        $summ = 0;
        foreach($arr as $value){
            $summ += $value;
        }
        return $summ;
    }
    // Рекурсия 
    function Recusia($x){
        $res = $x;
        if($res > 300){
            $res--;
            return Recusia($res);
        }
        else if($res < 300){
            $res++;
            return Recusia($res);
        }
        else if ($res == 300){
            echo "Three hundred bucks <br>";
        }
        else{
            echo "Ээээ, я не знаю что делать в 2 часа ночи <br>";
        }
        return $res;
    }

    $MyName = "Artem";
    Hello($MyName);
    $x_1 = 99;
    $x_2 = 1;
    Summa($x_1, $x_2);
    $Three_hundred_bucks = Recusia(95);
    echo Recusia(95) . " \$ у вас в кормане. <br>";
    $List_1 = [1, 3123, 32, 4, 0]; 
    echo SummElArr($List_1) . "<br>";
    click();
    click();
    click();
    ?>
</body>
</html>