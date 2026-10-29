<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход | XTREME</title>
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
      <<a href="pages/forum.php">Форум</a>
      <a href="login.php" class="btn-outline btn">Вход</a>
      <a href="registration.php" class="btn-primary btn">Регистрация</a>
    </div>
  </div>
</header>

<main>
  <div class="login-box">
    <h1>ВХОД</h1>
    <p class="login-sub">Добро пожаловать обратно!</p>

    <div class="social">
      <button class="social-btn fb">Войти через Facebook</button>
      <button class="social-btn google">Войти через Google</button>
    </div>

    <div class="or">или</div>

    <form>
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Пароль">
      <button class="login-btn">Войти</button>
    </form>

    <p class="register-link">Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p>
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