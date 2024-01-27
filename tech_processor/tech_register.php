<?php
session_start();

require("../controller/data_controller.php");
$data = new data_controller();

if(isset($_POST['register'])){
    $lname    = $data->escape_string($_POST['lname']);
    $fname    = $data->escape_string($_POST['fname']);
    $m        = $data->escape_string($_POST['m']);
    $username = $data->escape_string($_POST['username']);
    $email    = $data->escape_string($_POST['email']);
    $mobile   = $data->escape_string($_POST['mobile']);
    $address  = $data->escape_string($_POST['address']);
    $password = $data->escape_string($_POST['password']);

    if(!empty($username)){  
        $hashedpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data->register_tech($lname,$fname,$m,$username,$email,$mobile,$address,$hashedpass);
        $_SESSION['reg'] ='<div class="alert alert-success" role="alert">Successfully Registered!</div>';
            header('location:../view_technician/tech-register.php');
    }
    else{
        $_SESSION['reg'] ='<div class="alert alert-danger" role="alert">Fill up All Contents!</div>';
        header("location:../view_technician/tech-register.php");  
    }
}
?>