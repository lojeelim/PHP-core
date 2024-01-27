<?php
session_start();
require("../controller/data_controller.php");
$data = new data_controller();

    if(isset($_POST['edit'])){
        $username = $data->escape_string($_REQUEST['username']);
        $email = $data->escape_string($_POST['email']);
        $mobile = $data->escape_string($_POST['mobile']);
        $data->edit_admin($username , $email , $mobile);    
       $_SESSION['edit_a'] = '<div class="alert alert-success" role="alert"> Admin Update  Successfully! </div>';
        header("location:../view_admin/admin-admin-view.php " );
        unset($_SESSION['a_delete']);
    }

?>