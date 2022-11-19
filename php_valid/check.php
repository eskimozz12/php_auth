<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if(mb_strlen($login) < 5 || mb_strlen($login) > 17){
        echo "Недопустипая длина логина";
        exit();
    } else if(mb_strlen($pass)< 5 || mb_strlen($pass) > 32){
        echo "Недопустипая длина пароля(от 5 до 32 символов)";
        exit();
    }

    $mysql = new mysqli('localhost','root','','logbd');

    $mysql -> query("INSERT INTO `users`(`login`, `password`) 
    VALUES('$login', '$pass')");

    $mysql->close();

    header('Location: /')
?>