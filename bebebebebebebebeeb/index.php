<?php
session_start();
include ('id.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Book World</title>
</head>
<body>
  <header class="head">
    <div class="menu">
      <div class="box_image_navigation"><a href="index.php"><img src="img/book world.svg"></a></div>
      <div class="box_text_navigation">
        <p class="text_menu"><a href="catalog.php">Каталог</a></p>
        <p class="text_menu"><a href="####">О нас</a></p>
        <p class="text_menu"><a href="####">Где нас найти?</a></p>
        <p class="text_menu"><a href="login.php">Вход</a></p>
        <p class="text_menu"><a href="registration.php">Регистрация</a></p>
      </div>
    </div>
  </header>
  <main class="body">
    <h1 class="caption">Наши книги — Ваши любимцы!</h1>
    <!--Слайдер-->
    <div class="slider-container">
      <div class="slider">
        <img src="img/slide1.png">
        <img src="img/slide2.png">
        <img src="img/slide3.png">
        <img src="img/slide4.png">
        <img src="img/slide5.png">
      </div>
      <button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
      <button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
    </div>
    <div class="announcement"><p class="announcement_text">Сайт не для продажи!</p></div>
  </main>
  <footer class="footer">
    <p class="footer_text">Сайт не для продажи! Это курсовая работа, а не магазин книг! Вы ничего не сможете купить здесь!(P.S.: но выполнено неплохо, да?(ответ: да). Я старалась :з ).</p>
    <p class="footer_text">The site is not for sale! This is a term paper, not a bookstore!
      You can't buy anything here!(P.S.: but done well, yes?(answer: yes). I tried :з )</p>
      <img src="img/footer_line.svg" alt="line" class="svg_line">
      <div class="social_link">
        <a href="####" class="link">
          <img src="img/wa_logo.svg" alt="whatsapp" class="social_one">
        </a>
        <a href="####" class="link">
          <img src="img/XMLID_7_.svg" alt="viber" class="social-two">
        </a>
        <a href="####" class="link">
          <img src="img/x.svg" alt="twitterorx" class="social-tree">
        </a>
        <a href="####" class="link">
          <img src="img/instagramm.svg" alt="inst" class="social-for">
        </a>
        <a href="####" class="link">
          <img src="img/facebook.svg" alt="facebook" class="social-five">
        </a>
        <a href="####" class="link">
          <img src="img/vk.svg" alt="vk" class="social-six">
        </a>
        <a href="####" class="link">
          <img src="img/github.svg" alt="gitnub" class="social-seven">
        </a>
        <a href="####" class="link">
          <img src="img/google+.svg" alt="google+" class="social-eight">
        </a>
      </div>
  </footer>
  <script src="scripts/script.js"></script>
</body>
</html>