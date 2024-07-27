<?php
    $user_name = $_POST["user-name"];
    $user_password = $_POST["user-password"];
    $user_email = $_POST["user-email"];
    $message = $_POST["message"];

    if (strlen(trim($user_name)) == 0) {
        echo "вы не ввели имя пользователя";
        exit;
    }
    else if(trim($user_name) == "" || trim($user_password) == ""|| trim($user_email) == "") {
        echo "вы не ввели все данные";
        print_r($_POST);
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