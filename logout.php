<?php
session_start();

// Удаляем все сессионные переменные
session_unset();

// Уничтожаем сессию
session_destroy();

// Переходим на страницу логина
header("Location: login.php");
exit();
?>
