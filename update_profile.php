<?php
include('db.php'); //database connection
include('session.php');

?>

<?php

$id = $loggedin_id; // save user current id inside a variable

if(isset($_POST['submit']))
{

$email=$_POST['email'];
$username=$_POST['username'];

$sql = "UPDATE users_info SET email = '$email', username= '$username' WHERE id = '$id'";
$result=mysqli_query($con,$sql);
if($result)
{
  echo "<script>
  alert('Profile Updated!');
  window.location.href='profile.php';
  </script>";
$_SESSION['login_user']=$username; //update the user current username and save it as a session variable
}
else
{
echo "<script>alert('Profile not Updated </3 Username or Email is already exists');</script>";
}
}

?>
