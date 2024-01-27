<?php
session_start();
require("../controller/data_controller.php");
$data = new data_controller();

    if(isset($_POST['edit'])){
        $username  = $data->escape_string($_REQUEST['username']);
        $lastname  = $data->escape_string($_POST['lastname']);
        $firstname = $data->escape_string($_POST['firstname']);
        $m         = $data->escape_string($_POST['m']);
        $email     = $data->escape_string($_POST['email']);
        $mobile    = $data->escape_string($_POST['mobile']);
        $address   = $data->escape_string($_POST['address']);
        $house     = $data->escape_string($_POST['house']);
        $data->Edit_user($username,$lastname ,$firstname ,$m ,$email ,$mobile ,$address , $house);    
       $_SESSION['edit_u'] = '<div class="alert alert-success" role="alert"> Update  Successfully! </div>';
        header("location:../view_user/user-index.php " );
        unset($_SESSION['a_delete']);
    }

?>