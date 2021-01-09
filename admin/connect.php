<?php
$con = new mysqli('localhost', 'root', '', 'musicshop');

// Check connection
if (mysqli_connect_errno()) {
  echo "ket noi that bai " . mysqli_connect_error();
  exit();
}
?>