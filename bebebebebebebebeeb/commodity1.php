<?php
session_start();
include ('id.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book World</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="head">
    <div class="menu">
      <div class="box_image_navigation"><a href="index.php"><img src="img/book world.svg"></a></div>
      <div class="box_text_navigation">
        <p class="text_menu"><a href="index.php">Главная</a></p>
        <p class="text_menu"><a href="####">О нас</a></p>
        <p class="text_menu"><a href="####">Где нас найти?</a></p>
        <p class="text_menu"><a href="login.php">Вход</a></p>
        <p class="text_menu"><a href="registration.php">Регистрация</a></p>
      </div>
    </div>
  </header>
  <main class="body">
    <div class="announcement">
      <p class="announcement_text">Сайт не для продажи!</p>
    </div>
    <div class="products">
      <div class="button_exit">
        <a href="catalog.php">
          <p class="text_exit">
            _<img src="img/strelka.png">Назад_
          </p>
        </a>
      </div>
      <div class="photo_name_book">
        <div class="photo_book">
          <img src="img/book1.png" class="img_book">
        </div>
        <div class="name_book">
          <h1 class="">Уолден, или Жизнь в лесу</h1>
          <p>
            Жанры: Фантастика, Комедия, Романтика;
          </p>
          <p>
            Рейтинг: 18+;
          </p>
          <div style="display: flex;">
            <a href="####">
              <button class="registration_book">
                <p>
                  Оформить заказ
                </p>
              </button></a>
            <?php
            echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
            <input type="hidden" name="cart" value="Уолден, или Жизнь в лесу">
            <input type="submit" value="   " class="korzina">
            </form>
          </div>


        </div>
      </div>
      <div class="annotation">
        <h1>Аннотация:</h1>
        <p class="annotation_text">В 1857 году Торо "удалился от мира" и провел два года в собственноручно выстроенной
          хижине на берегу пруда Уолден.
          Результатом его добровольного затворничества стала состоящая из 18 взаимосвязанных глав-эссе книга "Уолден,
          или Жизнь в
          лесу", которая до сих пор продолжает оказывать огромное влияние на самые широкие круги молодежи,
          придерживающейся
          нонконформистских убеждений.
          "Осознанное потребление", отрицание культа материаль­ного преуспевания, любовь и бережное отношение к природе
          — вот лишь
          немногие из идей, которые современное общество почерпнуло из книги Торо. Из первой книги западной культуры, в
          которой
          простота и самодостаточность, интеллектуальное совершенствование и близость к природе открыто предлагаются как
          достойная
          альтернатива "обществу потребления".</p>
      </div>
    </div>
    <footer class="footer">
      <p class="footer_text">Сайт не для продажи! Это курсовая работа, а не магазин книг! Вы ничего не сможете купить
        здесь!(P.S.: но выполнено неплохо, да?(ответ: да). Я старалась :з ).</p>
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
</body>

</html>