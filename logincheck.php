<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['username']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $result = mysqli_query($con,"SELECT * FROM users_info");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$username) {
  header("location: login.php?remark_login=failed");
 }
 $sql="SELECT * FROM users_info WHERE username='$username' AND password='$password' LIMIT 1";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 
 if(mysqli_num_rows($result)==1) { // user found
   // check if user is admin or user

   if ($row['user_type'] == 'admin') {
     $_SESSION['login_user']=$username;
     header("location: login.php?remark_login=admin");
   }else{
     $_SESSION['login_user']=$username;
     header("location: login.php?remark_login=success");
   }
 }

}

?>
