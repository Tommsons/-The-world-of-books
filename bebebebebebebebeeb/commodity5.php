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
          <img src="img/book55.png" class="img_book">
        </div>
        <div class="name_book">
          <h1>Пятница 13-ое</h1>
          <p>
            Жанры: Ужасы;
          </p>
          <p>
            Рейтинг: 16+;
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
            <input type="hidden" name="cart" value="Пятница 13-ое">
            <input type="submit" value="   " class="korzina">
            </form>
          </div>
        </div>
      </div>
      <div class="annotation">
        <h1>Аннотация:</h1>
        <p class="annotation_text">Когда-то в лесном озере утонул мальчик. В летнем лагере, расположенном на берегу,
          произошло несколько загадочных убийств… Спустя несколько лет ничего не подозревающие молодые люди пришли снова
          разбить лагерь на проклятом месте. Их легкомыслие наказывается самым страшным образом…
          Они приехали на работу в лагерь Хрустальное Озеро. Семеро молодых людей, уверенных, что вся жизнь еще впереди.
          Но в
          лесах вокруг лагеря скрывается кто-то, уверенный в обратном. Кто-то, ослепленный бессмысленной ненавистью.
          Кто-то, кто
          не успокоится, пока не зальет этот лагерь кровью...
        </p>
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