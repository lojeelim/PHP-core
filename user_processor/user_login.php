<?php
session_start();
require("../controller/data_controller.php");

$data = new data_controller();

if(isset($_POST['btnlogin'])){
    $username = $data->escape_string($_POST['username']);
    $password = $data->escape_string($_POST['password']);

    if(!empty($username) && empty(!$password)){
        $result = $data->login_user($username,$password);
        
        if($result){
            $_SESSION['username'] = $username;
            header("location:../view_user/user-index.php");
        }
        else{
            $_SESSION['msg'] ='<div class="alert alert-danger shadow-lg" role="alert">Invalid Username or Password</div>';
            header("location:../view_user/user-login.php");
        }
    }
    else{
        $_SESSION['msg'] ='<div class="alert alert-danger shadow-lg" role="alert">Fill up All Contents!</div>';
        header("location:../view_user/user-login.php");
    } 
}
else{ 
     echo $_SESSION['msg'] ='You need to  login first';
}

//var_dump($uc->login("a","b"));

?>