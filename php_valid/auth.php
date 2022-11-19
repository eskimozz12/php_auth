<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $mysql = new mysqli('localhost','root','','logbd');

    $result = $mysql -> query("SELECT * FROM `users` 
    WHERE `login` = '$login' AND `password` = '$pass'");
    $user = $result->fetch_assoc();

    if($user == null) {
        echo "Неверный логин или пароль";
        exit();
    }

    setcookie('user',$user['name'], time() + 3600,"/");

    $mysql->close();

    header('Location: /html/index.html')
?>
