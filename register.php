<?php
require_once('db.php');

// Получаем данные из формы
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        // Хешируем пароль перед сохранением в базе данных
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        // Применяем защиту от SQL-инъекций с помощью подготовленных выражений
        $stmt = $conn->prepare("INSERT INTO `users` (login, pass, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $login, $hashedPass, $email);

        // Выполняем запрос
        if ($stmt->execute()) {
            echo "Успешная регистрация";
        } else {
            echo "Ошибка: " . $stmt->error;
        }

        // Закрываем подготовленное выражение
        $stmt->close();
    }
}

$conn->close();
?>
