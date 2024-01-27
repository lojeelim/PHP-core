<?php
require("../controller/data_controller.php");
$data = new data_controller();

 if(isset($_POST['delete'])){
    $username = $data->escape_string($_POST['username']);
    $result = $data->delete_tech($username);

    if($result){
        $_SESSION['msg'] ='<div class="alert alert-success" role="alert"> Technician Delete Successfully! </div>';
        header("location:../view_admin/admin-tech-view.php");
        
    }
    else{
        $_SESSION['msg'] ='<div class="alert alert-danger" role="alert"> Delete Failed! </div>';
        header("location:../view_admin/admin-tech-view.php");
    }

 }

?>