<?php
session_start();
if (isset($_POST['cart'])) {
  $name = $_POST['cart'];
  if ($name == '') {
    unset($name);
  }
}
if (empty($name)) {
  exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include ('dbconnect.php');
include ('id.php');

$result = $connect->query("SELECT * FROM products WHERE `name` = '$name'");
$myrow = $result->fetch_assoc();
$idprod = $myrow['id'];

$result2 = $connect->query("SELECT * FROM users WHERE email = '$log'");
$myrow2 = $result2->fetch_assoc();
$iduser = $myrow2['id'];

$cart = $connect->query("INSERT INTO `basket`(`idproducts`, `iduser`, `counter`) VALUES ('$idprod','$iduser', 1)");
header("Location: personalcabinet.php?id=$iduser");
?>