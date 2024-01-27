<?php

require("../controller/data_controller.php");
$data = new data_controller();
if(isset($_POST['reject'])){

    $serial = $data->escape_string($_POST['serial']);
    $date = $data->escape_string($_POST['date']);
    $result = $data->change_status_item($serial,"Reject",$date);

    if($result){
        echo "rejected successfully";
        header("location:../view_admin/admin-item-view.php");
    }
}


?>