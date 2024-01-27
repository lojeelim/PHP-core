<?php
session_start();
require("../controller/data_controller.php");
$data = new data_controller();

if(isset($_POST['assign'])){
    $serial = $data->escape_string($_SESSION['serial']);
    $username = $data->escape_string($_REQUEST['username']);
    $admin = $data->escape_string($_SESSION['a_username']);
    $data->admin_assign($serial,$username,$admin );
    $data->change_status_item($serial,"Under Process");
    $data->edit_message_status($serial,"0",$_SESSION['a_username'],$username);
    $_SESSION['msg'] ='<div class="alert alert-success" role="alert">Item Successfully Assigned!</div>';
    header("location:../view_admin/admin-item-view.php");

 }


?>
