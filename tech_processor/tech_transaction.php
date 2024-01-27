<?php
require("../controller/data_controller.php");
$data = new data_controller();


    if(isset($_POST['done'])){
        $client = $data->escape_string($_POST['client']);
        $technician = $data->escape_string($_POST['technician']);
        $admin = $data->escape_string($_POST['admin']);
        $price = $data->escape_string($_POST['price']);
        $service = $data->escape_string($_POST['service']);
        $serial = $data->escape_string($_POST['serial']);
        $item = $data->escape_string($_POST['item']);
        $status = $data->escape_string($_POST['status']);
        $data->make_transaction($client,$technician,$admin,$price,$service,$serial,$item,$status);
        $data->cancel_item($serial);
        $data->del_message($serial);
        header("location:../view_technician/tech-index.php");
    }



?>