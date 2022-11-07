<?php
session_start();
if(session_destroy()) {
  echo "<script>
  alert('See you soon :)');
  window.location.href='login.php';
  </script>";
}

?>
