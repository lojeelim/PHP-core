<?php
require("../controller/data_controller.php");
$data = new data_controller();

if(isset($_POST['deal'])){
    $serial = $data->escape_string($_POST['serial']);
    $remarks = $data->escape_string($_POST['remarks']);
    if(!empty($remarks)){
        $data->set_deal_item($serial,$remarks);
        $_SESSION['item'] ='<div class="alert alert-success " role="alert">Deal Confirm Successfully</div>  ';
        header("location:../view_user/done-list.php");
    }
    else{
        $_SESSION['item'] ='<div class="alert alert-danger " role="alert">Fill up All fields</div>  ';
        header("location:../view_user/done-list.php");

    }
}

?>