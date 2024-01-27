<?php
// this session is for client
  
if(!isset($_SESSION['username'])){
    header("location:../index/index.php");
  }
?>