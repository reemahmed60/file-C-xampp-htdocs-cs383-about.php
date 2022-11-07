<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="footer.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <link href="adminStyle.css" rel="stylesheet"><!--connect to the stylesheet-->
  <!-- Bootstrab -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- Load an icon library -->
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

<!--footer-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

<body style="font-family: Karma;">

  <!-- Navigation -->
  <?php
  require_once("nav.php");
  ?>
  <br>


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
<!--- Cat Adoption -->
<div class="container padding">
<div class="row row-padding-box">
  <div class="col-lg-6">
		<img src="images\1234.jpg" class="img-fluid" >
	</div>
	<div class="col-lg-6">
		<h1 style="font-family: Karma;">Adopt a Cat</h1>
    <hr>
		<p>Cats are territorial, and coming into a new home leaves them feeling really uneasy.
      There’s all that unexplored space, and who knows what may lurk there.
       Do him a favor and provide a small area to call his own for the first few days or weeks.
        A bathroom or laundry room works well. Furnish the room with cat amenities, such as food, water and a litter box.
         You’ll want to spend time with your cat,
      so make sure there’s a comfortable place for you to sit as well.</p>
		<p>If you are intrested in adopting a cat</p>
		<br>
			<a href="cats.php"><button type="button" class="btn text-white bg-secondary">Click Here</button></a>
	</div>
  <hr>
  <hr>


</div>
</div>
<br>
<!--- Dog Adoption -->
<div class="container padding">
<div class="row row-padding-box ">
  <div class="col-lg-6">
		<img src="images\ff.jpg" class="img-fluid" >
	</div>
	<div class="col-lg-6">
		<h1 style="font-family: Karma;">Adopt a Dog</h1>
    <hr>
		<p>The first few days in your home are special and critical for a pet.
       Your new dog will be confused about where he is and what to expect from you.
        Setting up some clear structure with your family for your dog will be paramount in making as smooth a transition as possible.</p>
        <br>

    <p>If you are intrested in adopting a Dog</p>
		<br>
			<a href="dogs.php"><button type="button" class="btn text-white bg-secondary">Click Here</button></a>
	</div>
</div>
</div>
<br>
<!--- Harboring Section -->
<div class="container padding">
<div class="row row-padding-box" >
  <div class="col-lg-6">
		<img src="images\har.jpg" class="img-fluid" >
	</div>
	<div class="col-lg-6">
		<h1 style="font-family: Karma;">Harboring</h1>
    <hr>
		<p>If you find any pet lost or if you don’t want your pet, this section is for you. You just need to fill the required form and we will take the rest. </p>
		<p> click here to harbor</p>
		<br>
			<a href="harboringform.php"><button type="button" class="btn text-white bg-secondary">Click Here</button></a>
	</div>

</div>
</div>
<br><br>
<h1 style="text-align:center; font-family: Karma; text-transform:  capitalize;"> Share your experience with us </h1>

<!--- Chatroom Section -->
<div class="container padding">
<div class="row row-padding-box-1" >
  <div class="col-lg-6">
		<img src="images\mm.jpg" class="img-fluid" >
	</div>
	<div class="col-lg-6" id="chat">
    <?php
    require_once("chatroom.php");
    ?>
	</div>

</div>
</div>
<br><br><br><br>

<!--- Footer -->
<?php
require_once("footer.php");
?>
   </div>
</body>
</html>
