<?php
include ('db.php');
include ('session.php');


if (isset($_POST['sendContact'])){

  $email= $_POST['email'];
  $message= $_POST['message'];
  $sql= "INSERT INTO contact(user_id, email, messages) VALUES('$loggedin_id', '$email', '$message')";

  $data= mysqli_query($con, $sql);
  if (!$data){
  echo ' <script> alert("Error in sending message")</script>';
 }else{
   echo "<script>
   alert('Your message sent successfully');
   window.location.href='userhome.php';
   </script>";
  }
}
?>
