<?php
$con = mysqli_connect("mysql5031.site4now.net","a7a5f9_taitau","Manbataitau2k","db_a7a5f9_taitau");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
mysqli_set_charset($con,"utf8");
?>
