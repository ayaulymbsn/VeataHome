<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дизайн Интерьера</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="javas/skript.js">
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
            <div class="slide" style="background-image: url('header.jpeg');"></div>
            <div class="slide" style="background-image: url('https://via.placeholder.com/1500x800?text=Фото+3');"></div>
        </div>
        <div class="head">
        <h1>Создайте идеальный интерьер с нами</h1>
        <p>Мы поможем вам создать уникальный стиль вашего пространства</p>
        </div>
    </section>

    <section id="about" class="about">
        <h2>О нас</h2>
        <p>Мы - команда профессионалов в области дизайна интерьера с многолетним опытом.</p>
    </section>

    <section id="services" class="services">
        <h2>Наши услуги</h2>
        <div class="service-card">
            <h3>Консультации</h3>
            <p>Помощь в выборе стиля и концепции дизайна</p>
        </div>
        <div class="service-card">
            <h3>Разработка проектов</h3>
            <p>Подробные чертежи и визуализации</p>
        </div>
        <div class="service-card">
            <h3>Реализация</h3>
            <p>Осуществляем все этапы ремонта и дизайна</p>
        </div>

        <section id="portfolio" class="portfolio">
        <h2>Портфолио</h2>
    </section>
        <section id="portfolio" class="portfolio">
            <h2>минимализм</h2>
            <div class="gallery">
                <img src="img/минимализм1.jpeg" alt="Проект 1">
                <img src="img/минимализм2.jpeg" alt="Проект 2">
                <img src="img/минимализм3.jpeg" alt="Проект 3">
                <img src="img/минимализм4.jpeg" alt="Проект 3">
                <img src="img/минимализм5.jpeg" alt="Проект 3">
            </div>
        </section>
  

    <section id="portfolio" class="portfolio">
        <h2>индастриал</h2>
        <div class="gallery">
            <img src="img/индастриал.jpeg" alt="Проект 1">
            <img src="img/индастриал1.jpeg" alt="Проект 2">
            <img src="img/индастриал 2.jpeg" alt="Проект 3">
            <img src="img/индастриал 3.jpeg" alt="Проект 3">
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <h2>лофт</h2>
        <div class="gallery">
            <img src="img/лофт 1.jpeg" alt="Проект 1">
            <img src="img/лофт2.jpeg" alt="Проект 2">
            <img src="img/лофт3.jpeg" alt="Проект 3">
            <img src="img/лофт4.jpeg" alt="Проект 3">
        
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <h2>хай-тек</h2>
        <div class="gallery">
            <img src="img/хай-тек 1.jpeg" alt="Проект 1">
            <img src="img/хай-тек 2.jpeg" alt="Проект 2">
            <img src="img/хай-тек3.jpeg" alt="Проект 3">
            
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Контакты</h2>
        <form id="contact-form">
            <input type="text" placeholder="Ваше имя" required>
            <input type="email" placeholder="Ваш email" required>
            <textarea placeholder="Ваше сообщение" required></textarea>
            <button type="submit">Отправить</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Дизайн Интерьера</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>