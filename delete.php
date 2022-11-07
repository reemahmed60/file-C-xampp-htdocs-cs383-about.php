<?php
include('db.php');

$id = $_GET['id']; //get the id

$sql="DELETE FROM adoptionform WHERE id='$id'";
$result=mysqli_query($con,$sql);
if($result){
  echo "<script>
alert('Request Deleted Sucessfully');
window.location.href='profile.php';
</script>";
}else {
 echo '<script> alert("Unable to delete Your request") </script>';
}

?>
