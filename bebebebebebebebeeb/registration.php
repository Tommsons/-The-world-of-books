
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book World</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="user_announcement">
    <p class="announcement_text">Сайт не для продажи!</p>
  </div>
  <form class="registration" action="save_user.php" method="post">
    <div class="customer_information">
      <div class="customer_information_fields">
        <input type="text" placeholder="Введите Имя" class="input_inform_one" required name="fname">
        <input type="text" placeholder="Введите Фамилию" class="input_inform_one" required name="surname">
        <input type="text" placeholder="Введите Отчество" class="input_inform_one" name="midname">
      </div>
      <div class="customer_information_fields">
        <input type="tel" placeholder="Ваш номер телефона" class="input_inform_one" required name="phone">
        <input type="email" placeholder="Введите почту" class="input_inform_one" required name="email">
      </div>
    </div>
    <div class="unique_password">
      <input type="password" class="password" placeholder="Придумайте пароль" required name="pswrd">
      <input type="password" class="password" placeholder="Повторите пароль" required name="pswrd2">
      <div class="text_exit_block">
        <a href="login.php"><p class="transition">
          Есть учетная запись?
        </p></a>
        <a href="index.php">
          <p class="transition">
            Вернуться на главную
          </p>
        </a>
      </div>

          <input class="btn_registration registration_reference" name="submit" type="submit" value="Зарегистрироваться" style="margin-left:25%; margin-right:25%; text-decoration:none; font-size: 23px; background-color:#77695F;">
      </a>
    </div>
    <img src="img/img_registration.png" class="img_registration">
  </form>
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
          <img src="img/github.svg" alt="github" class="social-seven">
        </a>
        <a href="####" class="link">
          <img src="img/google+.svg" alt="google+" class="social-eight">
        </a>
      </div>
  </footer>
</body>
</html>