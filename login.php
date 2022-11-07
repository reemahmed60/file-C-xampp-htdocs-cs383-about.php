<?php
include 'logincheck.php';
?>
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
  $remark_login = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
  if ($remark_login=='failed') {
  echo ' <script> alert("Login Failed!, Wrong Username or Password")</script>';
  }
  else if ($remark_login=='admin') {
    echo "<script>
    alert('Welcome Back Admin!');
    window.location.href='adminhome.php';
    </script>";
  }
  else if ($remark_login=='success') {
    echo "<script>
    alert('Welcome Back!');
    window.location.href='userhome.php';
    </script>";
  }

  ?>

  <div class="header">
    <img src="images/Warm_a_Pet transparent_Logo.png" height="200" width="220">
  </div>

<h2>Login </h2>

  <div class="container">
    <form action="logincheck.php" method="POST">
    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter username" name="username" required/><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required/>

    <button class="button" type="submit" name="submit">Login</button>
    <p class="">Not registered yet? <a href="signup.php">Create an account</a></p>
  </form>
</div><br><br>

</body>
</html>
