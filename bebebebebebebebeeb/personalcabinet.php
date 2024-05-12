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
        <p class="text_menu"><a href="index.php">Главная</a></p>
        <p class="text_menu"><a href="catalog.php">Каталог</a></p>
        <p class="text_menu"><a href="####">О нас</a></p>
        <p class="text_menu"><a href="####">Заказы</a></p>
        <p class="text_menu"><a href="exit.php">Выход</a></p>
      </div>
    </div>
  </header>
  <main class="body">
    <div class="announcement">
      <p class="announcement_text">Сайт не для продажи!</p>
    </div>
    <?php
    include ("dbconnect.php");
    $result = $connect->query("SELECT * FROM basket, users, products WHERE basket.idproducts = products.id AND basket.iduser = users.id AND basket.iduser = '$id'");
    while ($myrow = $result->fetch_assoc()) {
      $div .= '<div class="block_tovar">';
      $div .= '<img src="' . $myrow['photo'] . '" class="img_prod">';
      $div .= '<div class="prod-info">';
      $div .= '<p class="prod-title">' . $myrow['name'] . '</p>';
      $div .= '<div class="prod-other"><div class="gen-rat">';
      $div .= '<p class="prod-text">' . $myrow['genres'] . '</p>';
      $div .= '<p class="prod-text">Рейтинг: ' . $myrow['rating'] . '</p></div>';
      $div .= '<div class="quan-cost"><p class="prod-text">Количество: 1</p>';
      $div .= '<p class="prod-text">Сумма: ' . $myrow['price'] . ' ₽</p></div></div>';
      $div .= '<p class="prod-warn">Внимание! Оплата будет производиться за каждый товар по отдельности после потверждения о
          создании заказа администрацией сайта!</p>';
      $div .= '<div class="buttons"><a href="' . "catalog.php?id=$id" . '"><button class="prod-btn prod-cat">Подробнее о товаре...</button></a>';
      $div .= '<form action="' . "personalcabinet.php?id=$id" . '" method="post">
        <input type="hidden" name="clear_cart" value="1">
        ';
      $div .= '<a href="' . "personalcabinet.php?id=$id" . '"><button class="prod-btn prod-del">Удалить товар...</button></a></form>';
      $div .= '</div></div></div>';
    }
    echo $div;
    if (isset($_POST['clear_cart'])) {
      $clear = $connect->query("DELETE FROM basket WHERE iduser = '$id'");
    }
    ?>

    <div class="">

    </div>
  </main>
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