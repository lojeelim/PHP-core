<?php
session_start();

require("../controller/data_controller.php");
$data = new data_controller();


if(isset($_POST['change'])){

    
    $username = $data->escape_string($_POST['username']);
    $password = $data->escape_string($_POST['password']);
    $confirmpassword = $data->escape_string($_POST['confirmpassword']);
    $hashedpass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if(!empty($password) && !empty($confirmpassword)){
        if($password != $confirmpassword){
           
            $_SESSION['changepass_u'] = '<div class="alert alert-danger" role="alert"> Password Miss Matched! </div>';
            header("location:../view_user/user-changepass.php");
        }
        else{
            $data->change_user_password($username , $hashedpass);
            $_SESSION['changepass_u'] = '<div class="alert alert-success p-3" role="alert">Password Changed! <a class="" href="../view_user/user-index.php">Click Home <i class="fa fa-home "></i> </a></div>';
            header("location:../view_user/user-changepass.php");
            sleep(1 );
           
           

        }
    }
    else{
        $_SESSION['changepass_u'] = '<div class="alert alert-danger" role="alert">Fill Up All Blanks!</div>';
        header("location:../view_user/user-changepass.php");
    }

}


?>