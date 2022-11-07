<?php
include 'session.php';

if($user_type!= 'admin') {
 header("Location: logout.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="adminStyle.css" rel="stylesheet"><!--connect to the stylesheet-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrab -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href='https://fonts.googleapis.com/css?family=Karma' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Load an icon library -->

  <title>Admin Home</title>
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

<body style="font-family: Karma;">

  <!-- Navigation -->
  <?php
  require_once("ad_nav.php");
  ?>

  <div class="header">
  <img src="images/Warm_a_Pet transparent_Logo.png" height="200" width="220">
  </div>

  <br>
  <h1 style="text-align:center; font-family: Karma; text-transform: uppercase;"> Services </h1>
<!-- Horizontal row -->
  <div class="wrapper">
    <div class="divider div-transparent div-arrow-down"></div>
  </div>

  <br>

  <div class="container-fluid padding" >
  <div class="row row-padding-box" >
    <!--- Adoption Requests Cards -->
    <div class="container-fluid padding">
    <div class="row padding ">
    	<div class="col-md-3">
    		<div class="card">
    			<img class="card-img-top" src="images\form.png" width="500" height="303">
    			<div class="card-body">
    				<h4 class="card-title" style="font-family: Karma;">Adoption Requests</h4>
    				<p class="card-text">Modify users adoption requests</p>
    				<a href="ad_adoptionrequests.php" class="btn btn-outline-secondary">See Requests</a>
    			</div>
    		</div>
    	</div>
    <!--- Harboring Requests Cards -->
      <div class="col-md-3">
    		<div class="card">
    			<img class="card-img-top" src="images\form.png" width="500" height="303">
    			<div class="card-body">
    				<h4 class="card-title" style="font-family: Karma;">Harboring Requests</h4>
    				<p class="card-text">Modify users harboring requests</p>
    				<a href="ad_harboringrequiests.php" class="btn btn-outline-secondary">See Requests</a>
    			</div>
    		</div>
    	</div>

        <!--Adoption Cards-->
          <div class="col-md-3">
        		<div class="card">
        			<img class="card-img-top" src="images\cati.jpg" width="500" height="303">
        			<div class="card-body">
        				<h4 class="card-title" style="font-family: Karma;">Add Cats for Adoption</h4>
        				<p class="card-text">Pets for Adoption</p>
        				<a href="ad_addcat.php" class="btn btn-outline-secondary">From Here</a>
        			</div>
        		</div>
        	</div>

          <div class="col-md-3">
        		<div class="card">
        			<img class="card-img-top" src="images\dog.png" width="500" height="303">
        			<div class="card-body">
        				<h4 class="card-title" style="font-family: Karma;">Add Dogs for Adoption</h4>
        				<p class="card-text">Pets for Adoption</p>
        				<a href="ad_addDog.php" class="btn btn-outline-secondary">From Here</a>
        			</div>
        		</div>
        	</div>

        <!--- Contacting Cards-->
          <div class="col-md-3">
        		<div class="card">
        			<img class="card-img-top" src="images\contact.jpg"width="500" height="303">
        			<div class="card-body">
        				<h4 class="card-title" style="font-family: Karma;">Contacts</h4>
        				<p class="card-text">Modifing users contact messages</p>
        				<a href="ad_contact.php" class="btn btn-outline-secondary">See Messages</a>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
      <hr>
      <!--- Footer -->
      <footer>
      	<div class="container-fluid padding">
      	<div class="row text-center padding">
      		<div class="col-md-4">

          </div>
      	</div>
      	</div>
      </div>
    </div>

      </footer>

</body>
</html>
