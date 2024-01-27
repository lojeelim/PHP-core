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
    $house    = $data->escape_string($_POST['house']);
    $password = $data->escape_string($_POST['password']);
    $confirm  = $data->escape_string($_POST['confirmpassword']);



    if(!empty($lname) && !empty($fname) && !empty($m) && !empty($username) && !empty($email) && !empty($mobile) && !empty($address) && !empty($house) && !empty($password)){  
        if($password != $confirm){
            $_SESSION['reg'] ='<div class="alert alert-danger" role="alert">Password Miss Matched!</div>';
            header("location:../view_user/user-register.php");  
        }
        else
        {
            $hashedpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data->register_user($lname,$fname,$m,$username,$email,$mobile,$address,$house,$hashedpass);
            $_SESSION['reg'] ='<div class="alert alert-success" role="alert">
                Successfully Registered! <a class="border" href="../view_user/user-login.php">Click Login <i class="fa fa-sign-in-alt"></i> </a></div>';
                header("location:../view_user/user-register.php"); 
        }
    }
    else{
        $_SESSION['reg'] ='<div class="alert alert-danger" role="alert">Fill up All Contents!</div>';
        header("location:../view_user/user-register.php");  
    }
}
?>