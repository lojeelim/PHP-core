<?php
require("../controller/data_controller.php");
$data = new data_controller();

 if(isset($_POST['delete'])){
    $username = $data->escape_string($_POST['username']);
    $result = $data->delete_user($username);

    if($result){
        $_SESSION['msg'] ='<div class="alert alert-success" role="alert">Client Account Delete Successfully! </div>';
        header("location:../view_admin/admin-client-view.php");
      
    }
    else{
        $_SESSION['msg'] ='<div class="alert alert-danger" role="alert"> Delete Failed! </div>';
        header("location:../view_admin/admin-client-view.php");
    }

 }

?>