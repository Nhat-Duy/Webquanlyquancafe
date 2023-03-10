<?php
$mysqli = new mysqli("localhost","root","","webquanlicf");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối MySQLi không thành công " . $mysqli -> connect_error;
  exit();
}
?>