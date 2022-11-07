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

<body>

  <!-- Navigation -->
  <?php
  require_once("ad_nav.php");
  ?>
  <br>

<h1  style=" font-family: Karma, sans-serif; text-align: center; text-transform: uppercase;">Add Cats For Adobtion<h1>


<div id="form" style=" font-family: Karma, sans-serif; text-align: center;">
<div class="cont">
<h3>Fill the following form to add a dog for adoption: </h3>
  <form action="" method="post" enctype="multipart/form-data">

    <!-- image -->
    <div class="row">
      <div class="col-25">
        <label for="c_image">Pet Image</label>
      </div>
      <div class="col-75">
        <input type="file" name="d_image" class="" id="customFile">
      </div>
    </div>
    <!-- name -->
    <div class="row">
      <div class="col-25">
        <label for="pet_name">Pet Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="p_name" name="d_name" placeholder="Pet name.." required/>
      </div>
    </div>
    <!-- age -->
    <div class="row">
      <div class="col-25">
        <label for="age">Pet Age</label>
      </div>
      <div class="col-75">
        <input type="text" id="p_age" name="d_age" placeholder="Pet Age.." required/>
      </div>
    </div>
    <!-- gender -->
    <div class="row">
      <div class="col-25">
        <label for="gender">Pet Gender</label>
      </div>
      <div class="col-75">
        <select id="p_gender" name="d_gender">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <!-- location -->
    <div class="row">
      <div class="col-25">
        <label for="loc">Location</label>
      </div>
      <div class="col-75">
        <select id="loc" name="d_loc">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="riyadh">Riyadh</option>
          <option value="Jeddah">Jeddah</option>
        </select>
      </div>
    </div>
    <!-- info -->
    <div class="row">
      <div class="col-25">
        <label for="info">Information</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="d_info" placeholder="Write something.." style="height:200px" required/></textarea>
      </div>
    </div>
    <!-- submit form -->
    <div class="row ">
      <input type="submit" name="sendRequest" value="Submit">
    </div>
</div>

<!-- add to database -->
<?php
if (isset($_POST['sendRequest'])){
  // upload image path and extention to database
  $name= $_FILES['d_image']['name'];
  $target= "uploaded/" . basename($name);

  // select file type
  $imageFileType= strtolower(pathinfo($target,PATHINFO_EXTENSION));

  // Valed file extensions
  $extension_arr= array("jpg", "jpeg", "png", "gif");

  // check extension
  if(in_array($imageFileType, $extension_arr)){
    
  }

 $d_name=$_POST['d_name'];
 $d_age=$_POST['d_age'];
 $d_gender=$_POST['d_gender'];
 $d_loc=$_POST['d_loc'];
 $d_info=$_POST['d_info'];

 $sql= "INSERT INTO dogs(d_img, d_name, d_age, d_gender, d_loc, d_info)
 VALUES('$name', '$d_name', '$d_age', '$d_gender', '$d_loc', '$d_info')";

 move_uploaded_file($_FILES['d_image']['tmp_name'],$target);

 $data= mysqli_query($con, $sql);
 if (!$data){
 echo ' <script> alert("Data not inserted")</script>';
 }else{
   echo "<script>
alert('Data inserted successfully');
window.location.href='adminhome.php';
</script>";
 }
}
?>
<br><br>
</div>


	</body>
</html>
