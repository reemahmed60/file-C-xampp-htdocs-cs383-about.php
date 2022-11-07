<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href="adminStyle.css" rel="stylesheet"><!--connect to the stylesheet-->
<link href="footer.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrab -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Load an icon library -->
<!--footer-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
         /* Modify the background color */

         .row-padding-box{
             background-color: #ccf5ff;
             border:3px
         }
         .row-padding-box-1{
             background-color: #f1e9e4;
             border:3px
         }
         /* Modify brand and text color */

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
</head>

<body style="font-family: Karma;">

  <!-- Navigation -->
  <?php
  require_once("nav.php");
  ?>

  <div class="header">
  <img src="images/Warm_a_Pet transparent_Logo.png" height="200" width="220">
  </div>

  <br>

<!-- Horizontal row -->
  <div class="wrapper">
    <div class="divider div-transparent div-arrow-down"></div>
  </div>

  <br>
<!--- Cat Adoption -->
<div class="container padding">
<div class="row row-padding-box">

	<div class="col-lg-12 text-center">
		<h1 style="font-family: Karma;">Who Are We?</h1>
    <hr>
		<p>In Saudi Arabia, many people are facing difficulties in taking care of their pets.
      As a result, they abandon and throw them away, outside their houses, and many of these pets cannot survive outside due to many reasons like the hot weather or an inappropriate place that leads them to die.
      On the other side, many people are interested in adopting pets and can take care of them, but they are facing many difficulties in finding pets to adopt.
      To solve this problem, we are going to develop a website called "Warm a Pet".
      This website will make the adoption process of pets easier and satisfy people who are interested in pet adoption.
       On this website, users can adopt dogs or cats according to their locations which for now serves Jeddah and Riyadh.
</p>
		<br>

	</div>
  <hr>
  <hr>


</div>
</div>
<br>

</body>
</html>
