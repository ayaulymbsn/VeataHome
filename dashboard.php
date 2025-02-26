<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    // Проверяем, что введены логин и пароль
    if (empty($login) || empty($pass)) {
        echo "Заполните все поля!";
    } else {
        // Проверяем, есть ли такой пользователь в базе данных
        $stmt = $conn->prepare("SELECT id, login, pass FROM users WHERE login = ?");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Если такой пользователь найден
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Проверяем, совпадает ли пароль
            if ($pass == $user['pass']) {
                // Стартуем сессию и сохраняем информацию о пользователе
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_login'] = $user['login'];
                
                // Переходим в личный кабинет
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Неверный пароль";
            }
        } else {
            echo "Пользователь не найден";
        }
        
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
</head>
<body>

<h2>Войти</h2>
<form method="POST" action="login.php">
    <input type="text" name="login" placeholder="Логин" required><br>
    <input type="password" name="pass" placeholder="Пароль" required><br>
    <button type="submit">Войти</button>
</form>

</body>
</html>
