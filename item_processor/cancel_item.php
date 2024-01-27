<?php
session_start();
require("../controller/data_controller.php");
$data = new data_controller();

if(isset($_POST['cancel'])){
    $serial = $data->escape_string($_POST['serial']);
    $data->cancel_item($serial);
    $data->del_message($serial);
    $_SESSION['cancel'] = '<div class="alert alert-success " role="alert">Item now Deleted </div>';
    header("location:../view_user/user-index.php");
     
}

?>