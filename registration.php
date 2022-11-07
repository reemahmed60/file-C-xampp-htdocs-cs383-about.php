<?php
session_start();
include('db.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM users_info WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: signup.php?remarks=failed");
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 if(mysqli_query($con,"INSERT INTO users_info(fname, lname,username, email, password, user_type)VALUES('$fname', '$lname', '$username', '$email', '$password', 'user')")){
   // get id of the created user
   $logged_in_user_id = mysqli_insert_id($con);

   $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
   $user_session_id = $_SESSION['user'];
   header("location: signup.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: signup.php?remarks=error&value=$e");
 }
}

// return user array from their id
function getUserById($id){
	global $con;
	$query = "SELECT * FROM users_info WHERE id=" . $id;
	$result = mysqli_query($con, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}
?>
