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
</head>
<link rel="stylesheet" href="css/style.css">

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
    <div class="goods">
      <div class="commodity">
        <div class="img_book1"><img src="img/book1.png"></div>
        <p class="name_book">Уолден, или Жизнь в лесу</p>
        <p class="price">Цена: 800 ₽</p>
        <div class="possibilities">
          <a href="commodity1.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Уолден, или Жизнь в лесу">
          <input type="submit" value="   " class="korzina">
          </form>

        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book22.png" class="book_img"></div>
        <p class="name_book">The Essential Classics</p>
        <p class="price">Цена: 1800 ₽</p>
        <div class="possibilities">
          <a href="commodity2.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="The Essential Classics">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book3.png" class="book_img"></div>
        <p class="name_book">Библия</p>
        <p class="price">Цена: 1200 ₽</p>
        <div class="possibilities">
          <a href="commodity3.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Библия">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
    </div>
    <div class="goods">
      <div class="commodity">
        <div class="img_book1"><img src="img/book4.png"></div>
        <p class="name_book">Шерлок Холмс</p>
        <p class="price">Цена: 436 ₽</p>
        <div class="possibilities">
          <a href="commodity4.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Шерлок Холмс">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book5.png"></div>
        <p class="name_book">Пятница 13-ое</p>
        <p class="price">Цена: 945 ₽</p>
        <div class="possibilities">
          <a href="commodity5.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Пятница 13-ое">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book6.png"></div>
        <p class="name_book">Два капитана</p>
        <p class="price">Цена: 565 ₽</p>
        <div class="possibilities">
          <a href="commodity6.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Два капитана">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
    </div>
    <div class="goods">
      <div class="commodity">
        <div class="img_book1"><img src="img/book7.png"></div>
        <p class="name_book">Убить большого Соню</p>
        <p class="price">Цена: 890 ₽</p>
        <div class="possibilities">
          <a href="commodity7.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Убить большого Соню">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book8.png" class="book_img"></div>
        <p class="name_book">Наши внутренние конфликты</p>
        <p class="price">Цена: 430 ₽</p>
        <div class="possibilities">
          <a href="commodity8.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Наши внутренние конфликты">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book9.png"></div>
        <p class="name_book">Человек, который смеётся</p>
        <p class="price">Цена: 750 ₽</p>
        <div class="possibilities">
          <a href="commodity9.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Человек, который смеётся">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
    </div>
    <div class="goods">
      <div class="commodity">
        <div class="img_book1"><img src="img/book10.png"></div>
        <p class="name_book">Труженики моря</p>
        <p class="price">Цена: 1356 ₽</p>
        <div class="possibilities">
          <a href="commodity10.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Труженики моря">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book11.png" class="book_img"></div>
        <p class="name_book">Управление тревогой</p>
        <p class="price">Цена: 800 ₽</p>
        <div class="possibilities">
          <a href="commodity11.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Управление тревогой">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
      <div class="commodity">
        <div class="img_book1"><img src="img/book12.png" class="book_img"></div>
        <p class="name_book">Легко не будет</p>
        <p class="price">Цена: 760 ₽</p>
        <div class="possibilities">
          <a href="commodity12.php">
            <button class="information_book">
              <u>
                Подробнее о товаре
              </u>
            </button>
          </a>
          <?php
          echo $div = '<form action="' . "add_cart.php?id=$id" . '" method="post">'; ?>
          <input type="hidden" name="cart" value="Легко не будет">
          <input type="submit" value="   " class="korzina">
          </form>
        </div>
      </div>
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

</html>