<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="footer.css" rel="stylesheet"> <!--footer-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="adminStyle.css" rel="stylesheet"><!--connect to the stylesheet-->
<!-- Bootstrab -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<!--footer-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


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

<body>

  <!-- Navigation -->
  <?php
  require_once("nav.php");
  ?>
  <br>
<div style=" font-family: Karma, sans-serif;">
  <div style="text-align: center; text-transform: uppercase;"> <h1>cats to adopt</h1></div>
<!-- Horizontal row -->
  <div class="wrapper">
    <div class="divider div-transparent div-arrow-down"></div>
  </div>

<h2 style="text-align: left; text-transform: uppercase; font-family: Karma, sans-serif;"> choose a Location </h2>

<div id="myBtnContainer" class="box  w-25">
  <button id="all" class="btn active"> Show all</button>
  <button id="show_riyadh" class="btn"> Riyadh</button>
  <button id="show_jeddah" class="btn"> Jeddah</button>
</div>

<br><br>

<div class="container-fluid padding">
<div class="row row-padding-box" >

  <?php
  $sql="SELECT * FROM cats";
  $result=mysqli_query($con,$sql);
  ?>

  <?php
  while($rows=mysqli_fetch_array($result)){ echo '

    <div class=" '.$rows['c_loc'].' col-md-3 col-lg-4">
    <div class="card card-body h-100">

    <form action="adoptionform.php" method= "get">
    <p><img src="uploaded/'.$rows['c_img'].'" width= "100%" height="100%" "/></p>
     <p>Location: '.$rows['c_loc'].'</p>
     <p>Gender: '.$rows['c_gender'].'</p>
     <p>Age: '.$rows['c_age'].'</p>
     <p>Name: '.$rows['c_name'].'</p>
     <p>Info: '.$rows['c_info'].'</p>
     <p><button class="btn" type="submit" >Ask for Adoption</button></p>
    <input type="hidden" name="pet" value="'.$rows['c_name'].'"></input>
    </form>
    </div>
    </div>';} ?>



</div>
</div>
<br>
<br>
<!--- Footer -->
<?php
require_once("footer.php");
?>

<script>

$(document).ready(function(){
  $("#all").click(function(){
    $(".riyadh").show();
    $(".Jeddah").show();
  });
  $("#show_riyadh").click(function(){
    $(".riyadh").show();
    $(".Jeddah").hide();
  });
  $("#show_jeddah").click(function(){
    $(".Jeddah").show();
    $(".riyadh").hide();
  });
});

</script>



	</body>
</html>
