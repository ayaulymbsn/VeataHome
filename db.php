<?php
$servername = "localhost";
$username = "root";
$password = ""; // Пустой пароль для XAMPP по умолчанию
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Успех"; // Лучше убрать echo для проверки
}
?>
