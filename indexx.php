<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>VestaHome</title>
</head>
<body>
<header>
        <a href="index.php"><div class="logo">Дизайн Интерьера</div></a>
        <nav>
            <ul>
                <li><a href="about.php">О нас</a></li>
                <li><a href="services.php">Услуги</a></li>
                <li><a href="portfolio.php">Портфолио</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <li><a href="indexx.php">Регистрация</a></li>
            </ul>
        </nav>
    </header>

    <section class="intro">
        <div class="slider">
            <div class="slide" style="background-image: url('хай-тек1');"></div>
            <div class="slide" style="background-image: url('https://via.placeholder.com/1500x800?text=Фото+2');"></div>
            <div class="slide" style="background-image: url('https://via.placeholder.com/1500x800?text=Фото+3');"></div>
        </div>
        <h1>Создайте идеальный интерьер с нами</h1>
        <p><i>Мы создаем интерьеры, которые идеально соответствуют вашему стилю жизни, подчеркивая индивидуальность каждого пространства. Мы тщательно подходим к каждой детали, чтобы создать пространство, которое не только будет красивым, но и удобным.</p></i>
    </section>
    
    <div class="container">
        <header>
            <a href="/"><div class="logo">VestaHome</div></a>
        </header>
        <main>
            <div>
            <section id="contact" class="contact">
                <h2>Регистрация</h2>
                <form action="register.php" method="post">
                    <input type="text" placeholder="Логин" name="login">
                    <input type="text" placeholder="Пароль" name="pass">
                    <input type="text" placeholder="Повторить пароль" name="repeatpass">
                    <input type="text" placeholder="Почта" name="email">
                    <button type="submit">Зарегестрироваться</button>
                </form>
                </section>

                <section id="contact" class="contact">
                <h2>Уже есть аккаунт?</h2>
                <form action="login.php" method="post">
                    <input type="text" placeholder="Логин" name="login" required>
                    <input type="password" placeholder="Пароль" name="pass" required>
                    <button type="submit">Войти</button>
                </form>
                </section>
                </div>
        </main>
    </div>
     
    <footer>
        <p>&copy; 2025 Дизайн Интерьера</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>

