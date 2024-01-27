<?php
  session_start();
  // Remove all session variables
  session_unset();
  header("location:../index/index.php");
?>
