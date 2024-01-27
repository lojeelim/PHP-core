<?php
session_start();
require("../controller/data_controller.php");
$data = new data_controller();

 if(isset($_POST['delete'])){
    $username = $data->escape_string($_POST['username']);
    $data->delete_admin($username);
        $_SESSION['a_delete'] ='<div class="alert alert-success" role="alert"> Admin Delete Successfully! </div>';
        header("location:../view_admin/admin-admin-view.php");
        unset($_SESSION['edit_a']);

 }

?>