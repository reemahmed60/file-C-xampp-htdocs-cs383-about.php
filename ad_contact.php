<?php
include 'session.php';
include('db.php');

if($user_type!= 'admin') {
 header("Location: logout.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel = "stylesheet" type = "text/css" href = "adminStyle.css" /> <!--connect to the stylesheet-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

<!-- Bootstrab -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>
<style>

#tst{

background-image: url("https://img.freepik.com/free-vector/winter-background-with-pastel-color-brushes-leaves_220290-42.jpg?size=626&ext=jpg");
background-size: cover;
}
body {
   height: 100%;
   width: 100%;
   font-family: "Karma", sans-serif;

  text-align: center;
  color: #222;

  background-image: url("images/paw.png");

}
</style>

<body style=" font-family: Karma, sans-serif;">

  <!-- Navigation -->
  <?php
  require_once("ad_nav.php");
  ?>

  <br>
  <h1 style="text-align:center; font-family: Karma; text-transform: uppercase;"> users contact messages </h1>
<!-- Horizontal row -->
  <div class="wrapper">
    <div class="divider div-transparent div-arrow-down"></div>
  </div>

<div class="container-fluid padding">
  <div class="row padding ">
  <?php
  $sql="SELECT * FROM  contact";
  $result=mysqli_query($con,$sql);
  ?>

  <?php
  while($rows=mysqli_fetch_array($result)){ echo '



    <div class="col-md-3">
      <div class="card">


        <h4 class="card-header">Message Number #'.$rows['id'].'</h4>

         <div class="card-body">
           <p>Message: '.$rows['messages'].'</p>

           <h5 style="font-weight: bold;">Contact Info</h5>
           <p>Email: '.$rows['email'].'</p>

           <form  action="ad_contact.php" method="post">
           <h5 style="font-weight: bold;">Response</h5>
           <textarea id="subject" name="response" placeholder="Write response to the user.." style="height:200px" required/></textarea>
       </div>

       <div class="card-footer">
         <input type="submit" name="sendResponse" value="Submit">
       </div>
       <input type="hidden" name="msg_no" value="'.$rows['id'].'"></input>
       </form>

</div>
</div>';} ?>

</div>
</div>

  <?php
  if (isset($_POST['sendResponse'])){

    $id= $_POST['msg_no'];
    $responce=$_POST['response'];
    $sql2= "UPDATE contact SET response= '$responce' WHERE id= '$id'";
    $data= mysqli_query($con, $sql2);
    if (!$data){
    echo ' <script> alert("Response Not Saved")</script>';
   }else{
     echo "<script>
     alert('Response Saved Successfully');
     </script>";
    }

    $sql3= "SELECT * FROM contact WHERE id= $id ";
    $res= mysqli_query($con,$sql3);
    $r=mysqli_fetch_array($res);
    $user_email= $r['email'];
    $to_email ="$user_email";
    $subject = "Warm a Pet Customer Service";
    $body = "Dear user Thank you for get in touch with us.. $responce";
    $headers = "From: warmapet2021@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo ' <script> alert("Response sent to user email successfully...")</script>';
    } else {
        echo '<script> alert("Email sending failed...") </script>';
    }

  }?>

</body>
</html>
