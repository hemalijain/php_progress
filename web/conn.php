<?php
  DEFINE('DB_USERNAME', $_ENV["DB_USER"]);
 DEFINE('DB_PASSWORD', $_ENV["DB_PASSWORD"]);
 DEFINE('DB_HOST', $_ENV["DB_HOST"]);
 DEFINE('DB_DATABASE', $_ENV["DB_NAME"]);
 $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 if (mysqli_connect_error()) {
  die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }

 ?>
