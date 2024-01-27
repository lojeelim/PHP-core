<?php
session_start();
if(isset($_SESSION['username'])){
  header("location:../view_user/user-index.php");
}

if(isset($_SESSION['t_username'])){
  header("location:../view_technician/tech-index.php");
}

if(isset($_SESSION['a_username'])){
  header("location:../view_admin/admin-index.php");
}
?>