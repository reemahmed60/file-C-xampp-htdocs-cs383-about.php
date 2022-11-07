<?php
include('session.php');

if($user_type!= 'admin') {
 header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- Bootstrap CSS -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "style.css" /> <!--connect to the stylesheet-->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
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

<body style=" font-family: Karma, sans-serif; ">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Navigation -->
  <?php
  require_once("ad_nav.php");
  ?>
  <br>


<div class="container-fluid">
<h1 style="text-align:center;">Profile</h1>
<br>

<?php
$sql="SELECT * FROM users_info where id=$loggedin_id";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
?>

<div class="container-sm bg-light"  >
  <div class="w3-card-4"  id="tst" >

    <div class="w3-container w3-center">
      <img src="images\Profile.png" alt="Avatar" style="width:20%">
      <br><br>
      <p><?php echo ''.$rows['fname'].'  '.$rows['lname'].'';?> </p>
      <p><?php echo 'Username: '.$rows['username'].'';?> </p>
      <p><?php echo 'Email: '.$rows['email'].'';?> </p>


    </div>

  </div>
<?php } ?>

<br>


<nav class="bg-light" >
  <div class="nav nav-tabs" id="nav-tab" role="tablist">

    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
     type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Edit Profile</button>


  </div>
</nav>
<div class="tab-content bg-light" id="nav-tabContent">

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="text-align:center;">Here you can edit your profile information.



    <section class="container-fluid">
  <form action="update_profile.php" method = "post" enctype="multipart/form-data">
    <div class="row" style="align-items: center;">

        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="email" placeholder="Email" required><br><hr><br>

		<input type="submit" value="Update" name = "submit">
    </div>


  </form>
</section>

  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>


</div> <!-- container end -->
</div>


	</body>
</html>
