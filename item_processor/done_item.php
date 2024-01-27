<?php
session_start();
require("../controller/data_controller.php");
$data = new data_controller();

    if(isset($_POST['done'])){
    $serial = $data->escape_string($_POST['serial']);

    $status = $data->escape_string($_POST['status']);
    $done = $data->escape_string($_REQUEST['doned']);
    $comment = $data->escape_string($_POST['comment']);
      
        if($status == "Accepted"){

            $data->done_item($serial,$status,$done ,$comment);
            $_SESSION['done']='<div class="alert alert-success " role="alert">Item Accept!</div>';
            header("location:../view_technician/tech-index.php");
        
        }
      else{
            $data->change_status_item($serial,"Reject");
            $_SESSION['done']='<div class="alert alert-success " role="alert">Item Refused! </div>';
            header("location:../view_technician/tech-index.php");
        }
     
    }

?>
