<?php
// Создаем соединение с БД
$servername = "std-mysql";
$database = "std_1987_veb_lab5";
$username = "std_1987_veb_lab5";
$password = "12345678";
$conn = mysqli_connect($servername, $username, $password, $database);
?>

<--?php
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?-->