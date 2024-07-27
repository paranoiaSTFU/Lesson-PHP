<?php
    $title = "Подключение файлов - post";
    require_once "../PHP/blocks/head.php"; // Если файл не найден, то страница не загрузится, и выдаст ошибку 
    //include "../PHP/blocks/head.php" // Если файл не найден, то страница загрузится, но не будет отображаться тот элемент который пытались подключить
?>

<h1>Метод Post</h1>

<div class="container">
   <form action="check_post.php" method="post">
    <input type="text" name="user-name" placeholder="Введите имя" class="form-control">
    <input type="email" name="user-email" placeholder="Введите email" class="form-control">
    <input type="password" name="user-password" placeholder="Введите пароль" class="form-control">
    <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea>
    <input type="submit" name="user-password" value="Отправить" class="btn-control">
   </form>
</div>
<?php
    require_once "../PHP/blocks/footer.php";
?>