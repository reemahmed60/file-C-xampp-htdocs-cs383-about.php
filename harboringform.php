<?php
include 'session.php';
include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel = "stylesheet" type = "text/css" href = "style.css" /> <!--connect to the stylesheet-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Load an icon library -->

<!-- Bootstrab -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>
<style>
body {
   height: 100%;
   width: 100%;
   font-family: "Karma", sans-serif;

  text-align: center;
  color: #222;

  background-image: url("images/paw.png");

}
</style>

<body>

  <!-- Navigation -->
  <?php
  require_once("nav.php");
  ?>
  <br>

<h1  style=" font-family: Karma, sans-serif; text-align: center; text-transform: uppercase;">harboring cat Request<h1>



<div id="form" style=" font-family: Karma, sans-serif; text-align: center;">
<div class="cont">
<h3>Please fill the following form to ask for harboring your pet: </h3>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="row">
    <div class="col-25">
      <label for="loc">Pet Type</label>
    </div>
    <div class="col-75">
      <select id="type" name="p_type">
        <option selected="true" disabled="disabled">Select From Here..</option>
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
      </select>
    </div>
  </div>

    <div class="row">
      <div class="col-25">
        <label for="img">Pet Image</label>
      </div>
      <div class="col-75">
        <input type="file" name="img" class="" id="customFile">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="pet_name">Pet Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="p_name" name="p_name" placeholder="Your pet name.." required/>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="age">Pet Age</label>
      </div>
      <div class="col-75">
        <input type="text" id="p_age" name="p_age" placeholder="Your pet Age.." required/>
      </div>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="gender">Pet Gender</label>
      </div>
      <div class="col-75">
        <select id="gender" name="p_gender">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>

	    <div class="row">
      <div class="col-25">
        <label for="loc">Location</label>
      </div>
      <div class="col-75">
        <select id="loc" name="p_loc">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="Riyadh">Riyadh</option>
          <option value="Jeddah">Jeddah</option>
        </select>
      </div>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="reason">Harboring Reason</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="reason" placeholder="Write something.." style="height:200px" required/></textarea>
      </div>
    </div>

    <div class="row ">
      <input type="submit" name="sendRequest" value="Submit">
    </div>
  </form>
</div>


<?php
if (isset($_POST['sendRequest'])){

   $p_type= $_POST['p_type'];

 // upload image path and extention to database
 $name= $_FILES['img']['name'];
 $target= "uploaded/" . basename($name);

 // select file type
 $imageFileType= strtolower(pathinfo($target,PATHINFO_EXTENSION));

 // Valed file extensions
 $extension_arr= array("jpg", "jpeg", "png", "gif");

 // check extension
 if(in_array($imageFileType, $extension_arr)){
   
 }
 $p_name=$_POST['p_name'];
 $p_age=$_POST['p_age'];
 $p_gender=$_POST['p_gender'];
 $p_loc=$_POST['p_loc'];
 $reason=$_POST['reason'];


 $sql= "INSERT INTO harboringform(user_id, p_type, img, p_name, p_age, p_gender, p_loc, reason)
 VALUES( '$loggedin_id','$p_type', '$name', '$p_name', '$p_age', '$p_gender', '$p_loc', '$reason')";

  move_uploaded_file($_FILES['img']['tmp_name'],$target);

 $data= mysqli_query($con, $sql);

 if (!$data){
 echo ' <script> alert("Data not inserted")</script>';
}else{
  echo "<script>
  alert('Request is set successfully');
  window.location.href='profile.php';
  </script>";
 }
}

?>

<br><br>
</div>


	</body>
</html>
