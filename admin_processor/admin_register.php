<?php
session_start();

require("../controller/data_controller.php");
$data = new data_controller();

if(isset($_POST['register'])){
   
    $username = $data->escape_string($_POST['username']);
    $email    = $data->escape_string($_POST['email']);
    $mobile   = $data->escape_string($_POST['mobile']);
    $password = $data->escape_string($_POST['password']);

    if(!empty($username)){  
        $hashedpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data->add_admin($username,$email,$mobile,$hashedpass);
        $_SESSION['reg'] ='<div class="alert alert-success" role="alert">Successfully Registered!</div>';
        header('location:../view_admin/admin-register.php');
    }
}
?>