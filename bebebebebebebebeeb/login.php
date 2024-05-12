<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Book World</title>
</head>
<body>
  <div class="user_announcement">
    <p class="announcement_text">Сайт не для продажи!</p>
  </div>
  <form class="registration" action="test_user.php" method="post">
    <div class="user_data">
      <div class="personal_information" style="margin-bottom: 25px;">
        <input type="text" placeholder="Введите почту/Email" class="input_inform_information" required name="email">
      </div>
    </div>
    <div class="unique_password">
      <input type="password" class="password" placeholder="Введите пароль" required required name="pswrd">
      <div class="text_exit_block">
        <a href="registration.php">
          <p class="transition">
            Нет учетной записи?
          </p>
        </a>
        <a href="index.php">
          <p class="transition">
            Вернуться на главную
          </p>
        </a>
      </div>
      <input class="btn_registration registration_reference" name="submit" type="submit" value="Авторизироваться" style="margin-left:25%; margin-right:25%; text-decoration:none; font-size: 23px; background-color:#77695F;">
      </a>
    </div>
    <img src="img/img_login.png" class="img_registration">
  </form>
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
        <img src="img/github.svg" alt="github" class="social-seven">
      </a>
      <a href="####" class="link">
        <img src="img/google+.svg" alt="google+" class="social-eight">
      </a>
    </div>
  </footer>
</body>
</html>