<?php

date_default_timezone_set("Asia/Riyadh");
$date=date('F j, Y g:i:a');

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "warmpet";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);


  if (mysqli_connect_errno())
 {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  //to handle connection errors
 }
?>
