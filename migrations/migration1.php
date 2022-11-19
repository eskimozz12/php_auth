<?php
$mysql = new mysqli('localhost','root','','logbd');

$mysql -> query("CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(16) NOT NULL,
    password VARCHAR(32) NOT NULL
    )");

$mysql->close()
?>
