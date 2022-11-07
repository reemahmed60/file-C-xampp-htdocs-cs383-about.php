<?php

include('session.php');
require_once('tcpdf/tcpdf.php');

if (isset($_POST['print_a'])){


  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Warm a Pet Adoption Request");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 12);

      $obj_pdf->AddPage();

      $output1= '';
      $sql2="SELECT * FROM adoptionform where user_id=$loggedin_id";
      $result2=mysqli_query($con,$sql2);
      while($row=mysqli_fetch_array($result2)){
        $output1 .= '

            <h1 class="card-header">Adoption Number #'.$row['id'].'</h1>

             <div class="card-body">
             <h2 style="font-weight: bold;">Adoption Information</h2>
             <p>Name: '.$row['full_name'].'</p>
               <p>Pet Name: '.$row['pet_name'].'</p>
               <p>Phone Number: '.$row['ph_no'].'</p>
               <p>Email: '.$row['email'].'</p>
               <p>Age: '.$row['age'].'</p>
               <p>Location: '.$row['loc'].'</p>
               <p>Having any other pets: '.$row['havingpet'].'</p>
               <p>Adoption Reason: '.$row['adopt_reason'].'</p>
               <p>Adoption Status: '.$row['adopt_status'].'</p>
               </div>
        ';
      }
      $obj_pdf-> writeHTML( $output1);
      ob_end_clean();
      $obj_pdf-> Output("Requests.pdf");
}

if (isset($_POST['print_b'])){
  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Warm a Pet Harboring Request");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 12);

      $obj_pdf->AddPage();
      $output2= '';
      $sql3="SELECT * FROM  harboringform where user_id=$loggedin_id";
      $result3=mysqli_query($con,$sql3);
      while($row=mysqli_fetch_array($result3)){
        $output2 .= '

            <h1 class="card-header">Harboring Number #'.$row['h_id'].'</h1>

             <div class="card-body">
             <h2 style="font-weight: bold;">Harboring Information</h2>
             <p>Pet Type: '.$row['p_type'].'</p>
             <h5 style="font-weight: bold;">Pet Info</h5>
             <p><img src="uploaded/'.$row['img'].'" width= "100px" height="100px"/></p>
             <p>Pet Name: '.$row['p_name'].'</p>
             <p>Pet Age: '.$row['p_age'].'</p>
             <p>Pet Gender: '.$row['p_gender'].'</p>
             <p>Location: '.$row['p_loc'].'</p>
             <p>Harboring Reason: '.$row['reason'].'</p>
             <p>Harboring Status: '.$row['status'].'</p>
               </div>
        ';
      }
      $obj_pdf-> writeHTML( $output2);
      ob_end_clean();
      $obj_pdf-> Output("Requests.pdf");
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
<!--footer-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
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
<body style=" font-family: Karma, sans-serif;">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Navigation -->
  <?php
  require_once("nav.php");
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
      <img src="images\profile.png" alt="Avatar" style="width:20%">
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
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
     type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Adoption Requests</button>

     <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
      type="button" role="tab" aria-controls="nav-contact" aria-selected="false">My Harboring Requests</button>

    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
     type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Edit Profile</button>


  </div>
</nav>

<!-- Retreving adobtion requests information -->
<div class="tab-content bg-light" id="nav-tabContent">
  <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    Here you can see your adobtion requests and print it.

    <?php
    $sql="SELECT * FROM adoptionform where user_id=$loggedin_id";
    $result=mysqli_query($con,$sql);
    ?>
    <div class="table-responsive-md table-responsive-sm">
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Full name</th>
          <th scope="col">Pet Name</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Location</th>
          <th scope="col">having Pet</th>
          <th scope="col">Adoption Reason</th>
          <th scope="col">Adoption Status</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($rows=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $rows['full_name'];?></td>
          <td><?php echo $rows['pet_name'];?></td>
          <td><?php echo $rows['ph_no'];?></td>
          <td><?php echo $rows['email'];?></td>
          <td><?php echo $rows['age'];?></td>
          <td><?php echo $rows['loc'];?></td>
          <td><?php echo $rows['havingpet'];?></td>
          <td><?php echo $rows['adopt_reason'];?></td>
          <td><?php echo $rows['adopt_status'];?></td>
          <td><button id="btn"><a  href="delete.php?id=<?php echo $rows['id']; ?>"> Delete Request</a></button>
        </tr><?php } ?>
        <tbody>
      </table>
      <form method="post" >
        <input type="submit" value="Print Requests" name="print_a" class="btn btn-danger">
      </form>
    </div>
  </div>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Here you can see your harboring requests and print it.

    <?php
    $sql="SELECT * FROM harboringform where user_id=$loggedin_id";
    $result=mysqli_query($con,$sql);
    ?>
    <div class="table-responsive-md table-responsive-sm">
    <table class="table table-hover" enctype="multipart/form-data">
      <thead class="thead-light">
        <tr>
          <th scope="col">Request Number</th>
          <th scope="col">Pet Type</th>
          <th scope="col">Pet Image</th>
          <th scope="col">Pet Name</th>
          <th scope="col">Pet Age</th>
          <th scope="col">Pet Gender</th>
          <th scope="col">Pet Location</th>
          <th scope="col">Harboring Reason</th>
          <th scope="col">Harboring Status</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($rows=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $rows['h_id'];?></td>
          <td><?php echo $rows['p_type'];?></td>
          <td><img src="uploaded/<?php echo $rows['img'];?>" width= "140px" height="140px"/></td>
          <td><?php echo $rows['p_name'];?></td>
          <td><?php echo $rows['p_age'];?></td>
          <td><?php echo $rows['p_gender'];?></td>
          <td><?php echo $rows['p_loc'];?></td>
          <td><?php echo $rows['reason'];?></td>
          <td><?php echo $rows['status'];?></td>
          <td><button id="btn"><a  href="delete.php?id=<?php echo $rows['id']; ?>"> Delete Request</a></button>
        </tr><?php } ?>
        <tbody>
      </table>
      <form method="post">
        <input type="submit" value="Print Requests" name="print_b" class="btn btn-danger">
      </form>
    </div>
  </div>



  <!-- Editing profile information -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Here you can edit your profile information.

    <section class="container-fluid ">
  <form action="update_profile.php" method = "post" enctype="multipart/form-data">
    <div class="row">

        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="email" placeholder="Email" required><br><hr><br>

		<input type="submit" value="Update" name = "submit">
    </div>
  </form>
</section>

  </div>

  </div>

</div>


</div> <!-- container end -->

<!--- Footer -->
<?php
require_once("footer.php");
?>
</div>

	</body>
</html>
