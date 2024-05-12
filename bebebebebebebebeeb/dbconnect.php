<?php
session_start();
?>
<?php
$connect = new mysqli('bebebebebebebebeeb', 'root', '', ' The world of books');
if ($connect->connect_error) {
  die(' Connect Error (' . $connect->connect_errno . ') ' . $connect->connect_error);
}
?>