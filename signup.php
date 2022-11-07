<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
  <link rel = "stylesheet" type = "text/css" href = "style.css" /> <!--connect to the stylesheet-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
</head>

<body>

  <?php
  $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
  if ($remarks=='success') {
    echo "<script>
    alert('Registration Success. Welcome to Warm a Pet. Please login.');
    window.location.href='login.php';
    </script>";
  }
  if ($remarks=='failed') {
  echo ' <script> alert("Registration Failed!, Username exists")</script> ';
  }
  if ($remarks=='error') {
  echo ' <script> alert("Registration Failed! <br> Error: '.$_GET['value'].'")</script>';
  }
  ?>

  <div class="header">
    <img src="images/Warm_a_Pet transparent_Logo.png" height="200" width="220">
  </div>

<h2>Sign up </h2>

  <div class="container">
<form action="registration.php" onsubmit="return validateForm()" method="post">
  <p>Please fill in this form to create an account.</p>
  <hr class="hr">

  <label for="fname"><b>First Name</b></label><br>
  <input type="text" placeholder="Enter first name" name="fname" required=""/>
  <br>

    <label for="lname"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter last name" name="lname" required=""/>
    <br>

    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" required=""/>
    <br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter email" name="email" required=""/>
    <br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required=""/>
    <br>

    <button class="button" type="register_btn" name="submit">Sign Up</button>
    <p class="">Already registered? <a href="login.php">Log In</a></p>
</form>

  </div><br><br>

</body>
</html>
