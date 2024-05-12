<?php
if (isset($_GET['id'])) {
  global $varid;
  $id = $_GET['id'];
  $log = $_SESSION['email'];
}
$GLOBALS['id'] = $id;
$GLOBALS['email'] = $log;
?>