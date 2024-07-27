<?php
    $title = "Подключение файлов - Обработка форм. Передача данных методом POST и GET";
    include "../PHP/blocks/head.php";
?>

<h1>Обработка форм. Передача данных методом POST и GET</h1>
<?php 
print_r($_POST);
print_r($_GET);
?>   
<?php
    require "../PHP/blocks/footer.php";
?>