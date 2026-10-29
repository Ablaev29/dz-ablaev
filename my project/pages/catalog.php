<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог | XTREME</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
  <div class="container header-inner">
    <div class="logo">
      <img src="../assets/images/лого.png" alt="Логотип" class="logo-img">
      <span>XTREME</span>
    </div>
  <div class="menu-btn" onclick="toggleMenu()">Меню</div>
    <div class="nav" id="navMenu">
      <a href="../index.php">Главная</a>
      <a href="catalog.php">Каталог</a>
      <a href="forum.php">Форум</a>
      <a href="login.php" class="btn-outline btn">Вход</a>
      <a href="registration.php" class="btn-primary btn">Регистрация</a>
    </div>
  </div>
</header>

<main>
  <div class="section">
    <div class="container">
      <h2>ВИДЕОУРОКИ</h2>
      <p class="catalog-subtitle">Экстрим — это наш сервис</p>

      <div class="catalog-grid">
        <div class="catalog-card">
          <img src="../assets/images/сноубордист.jfif" alt="Видео 1">
          <div class="card-info">
            <h3>Сноуборд для начинающих</h3>
            <p>25 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/скейт.jfif" alt="Видео 2">
          <div class="card-info">
            <h3>Олли на скейте</h3>
            <p>15 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/падение.jfif" alt="Видео 3">
          <div class="card-info">
            <h3>Техника падения</h3>
            <p>20 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/bmx.jfif" alt="Видео 4">
          <div class="card-info">
            <h3>BMX для новичков</h3>
            <p>30 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/паркур.jfif" alt="Видео 5">
          <div class="card-info">
            <h3>Паркур: первые шаги</h3>
            <p>18 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/скалолазание.jfif" alt="Видео 6">
          <div class="card-info">
            <h3>Скалолазание для начинающих</h3>
            <p>22 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/велик.jfif" alt="Видео 7">
          <div class="card-info">
            <h3>Фрирайд: основы</h3>
            <p>28 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
        <div class="catalog-card">
          <img src="../assets/images/парашют.jfif" alt="Видео 8">
          <div class="card-info">
            <h3>Прыжки на парашюте</h3>
            <p>12 мин</p>
            <a href="#" class="card-btn">Смотреть</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>
  <div class="container">
    <div class="footer-inner">
      <div><h4>XTREME</h4><p>Экстрим — это наш сервис</p></div>
      <div><h4>Навигация</h4><a href="../index.php">Главная</a><a href="catalog.php">Каталог</a><a href="sale.php">Акции</a><a href="forum.php">Форум</a></div>
      <div><h4>Аккаунт</h4><a href="login.php">Вход</a><a href="registration.php">Регистрация</a></div>
      <div><h4>Контакты</h4><p>hello@xtreme.ru</p></div>
    </div>
    <div class="copyright">© 2026 XTREME</div>
  </div>
</footer>
</body>
</html>