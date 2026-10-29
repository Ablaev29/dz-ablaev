<?php
date_default_timezone_set('Asia/Yekaterinburg');

$currentHour = (int)date('H');

if ($currentHour >= 8 && $currentHour < 20) {

    $cssFile = 'assets/css/style.css';
} else {
   
    $cssFile = 'assets/css/style_night.css';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная | XTREME</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="<?php echo $cssFile; ?>">
</head>
<body>

<header>
    <div class="container header-inner">
        <div class="logo">
            <img src="assets/images/лого.png" alt="Логотип" class="logo-img">
            <span>XTREME</span>
        </div>
        <div class="menu-btn" onclick="toggleMenu()">Меню</div>
        <div class="nav" id="navMenu">
            <a href="index.php">Главная</a>
            <a href="pages/catalog.php">Каталог</a>
            <a href="pages/forum.php">Форум</a>
            <a href="pages/login.php" class="btn-outline btn">Вход</a>
            <a href="pages/registration.php" class="btn-primary btn">Регистрация</a>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="slider">
            <img src="assets/images/слайд.jfif" alt="Слайд" class="slide-img">
            <div class="slide-text">
                <h2>Экстремальный спорт</h2>
                <p>Экстрим — это наш сервис</p>
                <a href="pages/catalog.php" class="btn-primary btn">Наши услуги</a>
            </div>
        </div>

        <div class="section">
            <h2>УСЛУГИ</h2>
            <div class="grid-4">
                <div class="card"><div class="icon"></div><h3>Сноуборд & Лыжи</h3></div>
                <div class="card"><div class="icon"></div><h3>Скейтбординг & BMX</h3></div>
                <div class="card"><div class="icon"></div><h3>Скалолазание & Паркур</h3></div>
                <div class="card"><div class="icon"></div><h3>Новости экстрима</h3></div>
            </div>
        </div>

        <div class="section">
            <h2>О НАС</h2>
            <div class="about">
                <div class="about-text">
                    <p><strong>XTREME</strong> — сообщество для тех, кто живёт адреналином и не боится риска. Мы объединяем райдеров, скалолазов, паркурщиков и всех, кто выбирает экстрим.</p>
                    <p>Наша миссия — сделать экстремальный спорт доступнее, безопаснее и интереснее. Мы публикуем свежие новости, обучающие видео, обзоры экипировки и помогаем находить единомышленников по всему миру.</p>
                </div>
                <div class="about-stats">
                    <div class="stat"><span>50+</span> спортплощадок</div>
                    <div class="stat"><span>100+</span> видеоуроков</div>
                    <div class="stat"><span>5000+</span> экстремалов</div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>ПРОЕКТЫ</h2>
            <div class="grid-3">
                <div class="gallery-item">
                    <img src="assets/images/шлем.png" alt="Сноуборд-парк">
                    <div class="gallery-caption">Сноуборд-парк «Экстрим»</div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/прокат.png" alt="Скейт-парк">
                    <div class="gallery-caption">Скейт-парк «Гранит»</div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/скейт.png" alt="Скалодром">
                    <div class="gallery-caption">Скалодром «Вертикаль»</div>
                </div>
            </div>
        </div>
        <div class="section">
            <h2>НАША КОМАНДА</h2>
            <div class="team-list">
                <img src="assets/images/наша команда.png" alt="Слайд" class="comanda-img">

            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <div class="footer-inner">
            <div><h4>EXTREME</h4><p>Экстремальный спорт</p></div>
            <div><h4>Навигация</h4><a href="index.php">Главная</a><a href="pages/catalog.php">Каталог</a><a href="pages/sale.php">Форум</a></div>
            <div><h4>Аккаунт</h4><a href="pages/login.php">Вход</a><a href="pages/registration.php">Регистрация</a></div>
            <div><h4>Контакты</h4><p>extreme531@gmail.com</p><p>+7 964 951-47-45</p></div>
        </div>
        <div class="copyright">© 2026 EXTREME. Все права защищены.</div>
    </div>
</footer>

</body>
</html>
