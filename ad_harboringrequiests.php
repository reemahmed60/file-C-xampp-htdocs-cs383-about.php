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
  <h1 style="text-align:center; font-family: Karma; text-transform: uppercase;"> users harboring requests </h1>
<!-- Horizontal row -->
  <div class="wrapper">
    <div class="divider div-transparent div-arrow-down"></div>
  </div>

<div class="container-fluid padding">
  <div class="row padding ">
  <?php
  $sql="SELECT * FROM  harboringform left join `users_info` on users_info.id=harboringform.user_id";
  $result=mysqli_query($con,$sql);
  ?>

  <?php
  while($rows=mysqli_fetch_array($result)){ echo '



    <div class="col-md-3">
      <div class="card">


        <h4 class="card-header">Harboring Number #'.$rows['h_id'].'</h4>

         <div class="card-body">
           <p>Pet Type: '.$rows['p_type'].'</p>
           <h5 style="font-weight: bold;">Pet Info</h5>
           <p><img src="uploaded/'.$rows['img'].'" width= "100px" height="100px"/></p>
           <p>Pet Name: '.$rows['p_name'].'</p>
           <p>Pet Age: '.$rows['p_age'].'</p>
           <p>Pet Gender: '.$rows['p_gender'].'</p>
           <p>Location: '.$rows['p_loc'].'</p>
           <p>Harboring Reason: '.$rows['reason'].'</p>

           <h5 style="font-weight: bold;">User Info</h5>
           <p>Name: '.$rows['username'].'</p>
           <p>Email: '.$rows['email'].'</p>


           <form  action="ad_harboringrequiests.php" method="post">
           <h5 style="font-weight: bold;">Request Status</h5>
           <select id="status" name="status">
           <option value="Accepted">Accepted</option>
           <option value="Refused">Rejected</option>
         </select>
       </div>

       <div class="card-footer">
         <input type="submit" name="sendStatus" value="Submit">
       </div>

       <input type="hidden" name="req_no" value="'.$rows['h_id'].'"></input>
       <input type="hidden" name="pet_type" value="'.$rows['p_type'].'"></input>
       </form>

</div>
</div>';} ?>

</div>
</div>

  <?php
  if (isset($_POST['sendStatus'])){

    $id= $_POST['req_no'];
    $status=$_POST['status'];
    $sql2= "UPDATE harboringform SET status ='$status' WHERE h_id= $id";
    $data= mysqli_query($con, $sql2);
    if (!$data){
    echo ' <script> alert("Status Not Updated")</script>';
   }else{
     echo "<script>
     alert('Status Updated Successfully');
     </script>";
    }


    $sql3= "SELECT * FROM harboringform left join `users_info` on users_info.id=harboringform.user_id WHERE h_id= $id ";
    $res= mysqli_query($con,$sql3);
    $r=mysqli_fetch_array($res);
    $user_email= $r['email'];
    $req_no= $r['h_id'];
    $to_email ="$user_email";
    $subject = "Harboring Request Status";
    $body = "Hi, This is an email from Warm a Pet to inform you that your harboring request number #$req_no status is: $status";
    $headers = "From: warmapet2021@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo ' <script> alert("Email successfully sent to user...")</script>';
    } else {
        echo '<script> alert("Email sending failed...") </script>';
    }

  }?>

</body>
</html>
