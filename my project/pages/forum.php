<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Форум | XTREME</title>
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
      <h2>ФОРУМ</h2>
      <p class="forum-subtitle">Общайся с единомышленниками</p>

      <div class="forum-list">
        <div class="forum-item">
          <img src="../assets/images/anon.jpg" alt="Аватар" class="forum-avatar-img">
          <div class="forum-content">
            <h3>Анна</h3>
            <p>Подскажите, где покататься на сноуборде в Подмосковье?</p>
            <span class="forum-time">Сегодня в 10:30</span>
          </div>
        </div>

        <div class="forum-item">
          <img src="../assets/images/anon.jpg" alt="Аватар" class="forum-avatar-img">
          <div class="forum-content">
            <h3>Дмитрий</h3>
            <p>Кто летит на соревнования по BMX в Питер?</p>
            <span class="forum-time">Вчера в 18:15</span>
          </div>
        </div>

        <div class="forum-item">
          <img src="../assets/images/anon.jpg" alt="Аватар" class="forum-avatar-img">
          <div class="forum-content">
            <h3>Максим</h3>
            <p>Новичок в скалолазании. С чего начать?</p>
            <span class="forum-time">Вчера в 12:00</span>
          </div>
        </div>

        <div class="forum-item">
          <img src="../assets/images/anon.jpg" alt="Аватар" class="forum-avatar-img">
          <div class="forum-content">
            <h3>Елена</h3>
            <p>Ищу компанию для паркура в парке Горького</p>
            <span class="forum-time">Вчера в 09:45</span>
          </div>
        </div>
      </div>

      <div class="forum-form">
        <h3>Добавить сообщение</h3>
        <input type="text" placeholder="Ваше имя">
        <textarea rows="3" placeholder="Ваше сообщение"></textarea>
        <button>Отправить</button>
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