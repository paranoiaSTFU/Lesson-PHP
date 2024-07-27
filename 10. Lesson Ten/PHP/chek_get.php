<?php
    $user_name = $_GET["user-name"];
    $user_password = $_GET["user-password"];
    $user_email = $_GET["user-email"];
    $message = $_GET["message"];

    if (strlen(trim($user_name)) == 0) {
        echo $user_name;
        echo "вы не ввели имя пользователя";
        exit;
    }
    else if(trim($user_name) == "" || trim($user_password) == ""|| trim($user_email) == "") {
        echo "вы не ввели все данные";
        exit;
    }
    else if(strlen($user_password) <= 10){
        echo "пароль должен быть длинее 10 символов";
        exit;
    }
    else{
        echo "успех";
        header("Location: Index.php");
        exit;
    }
?>