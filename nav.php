<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="font-family: Karma;">
  <div class="container-fluid">
    <a class="navbar-brand" >
      <img src="images\logo.png" width="40" height="40" class="d-inline-block align-middle" alt="logo">Warm a Pet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="userhome.php">Home <span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown ">
        <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cats.php">Adopt Cat</a>
          <a class="dropdown-item" href="dogs.php">Adopt Dog</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="harboringform.php">Harboring</a>
        </div>
      </li>

      <li class="navbar-brand">
      <a href="logout.php">Log out</a>
    </li>

    </ul>
    <span class="navbar-brand">
      <i class="fa fa-user" aria-hidden="true"></i><a href="profile.php" class="my-2 my-sm-0">
         Welcome <?php echo $loggedin_session; ?> </a>
  </span>

  </div>
</div>
</nav>
