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

<h1  style=" font-family: Karma, sans-serif; text-align: center; text-transform: uppercase;">Adoption Request<h1>

  <?php
  $sql="SELECT * FROM users_info where id=$loggedin_id";
  $result=mysqli_query($con,$sql);
  while($rows=mysqli_fetch_array($result)){
  ?>

<div id="form" style=" font-family: Karma, sans-serif; text-align: center;">
<div class="cont">
<h3>Please fill the following form to ask for adoption: </h3>
  <form action="" method="post">
    <?php $pet_num= $_GET['pet'];?>
    <p> You are asking an adoption request to adopt <?php echo $pet_num;?></p>

    <div class="row">
      <div class="col-25">
        <label for="full_name">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="full_name" value="<?php echo''.$rows['fname'].' '.$rows['lname'].'';?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="ph_no">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="fnumber" name="ph_no" placeholder="Your phone number.." required/>
      </div>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" value="<?php echo $rows['email'];?>" required/>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="age">Age</label>
      </div>
      <div class="col-75">
        <select id="age" name="age">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="20-29">20-29</option>
          <option value="30-39">30-39</option>
          <option value="40-49">40-49</option>
		  <option value="50above">50 and above</option>
        </select>
      </div>
    </div>

	    <div class="row">
      <div class="col-25">
        <label for="loc">Location</label>
      </div>
      <div class="col-75">
        <select id="loc" name="loc">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="Riyadh">Riyadh</option>
          <option value="Jeddah">Jeddah</option>
        </select>
      </div>
    </div>

	<div class="row">
      <div class="col-25">
        <label for="havingpet">Have you ever had a pet?</label>
      </div>
      <div class="col-75">
        <select id="havingpet" name="havingpet">
          <option selected="true" disabled="disabled">Select From Here..</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="adopt_reason">Why do you want to adopt this pet?</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="adopt_reason" placeholder="Write something.." style="height:200px" required/></textarea>
      </div>
    </div>
    <div class="row ">
      <input type="submit" name="sendRequest" value="Submit">
    </div>
  </form>
</div> <?php } ?>
<?php
$result = mysqli_query($con,"SELECT * FROM adoptionform WHERE pet_name='$pet_num'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
  echo "<script>
 alert('Sorry This pet is already had adopted by Someone else');
 window.location.href='javascript:history.back()';
 </script>";
}elseif (isset($_POST['sendRequest'])){

 $fullname=$_POST['full_name'];
 $phNo=$_POST['ph_no'];
 $email=$_POST['email'];
 $age=$_POST['age'];
 $location=$_POST['loc'];
 $havingpet=$_POST['havingpet'];
 $adoptreason=$_POST['adopt_reason'];
 $sql= "INSERT INTO adoptionform(pet_name, user_id, full_name, ph_no, email, age, loc, havingpet, adopt_reason)
 VALUES('$pet_num', '$loggedin_id', '$fullname', '$phNo', '$email', '$age', '$location', '$havingpet',  '$adoptreason')";
 $data= mysqli_query($con, $sql);
 if (!$data){
 echo ' <script> alert("Someone has requested to adopt this pet")</script>';
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
