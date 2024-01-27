<?php session_start();
 require("../controller/data_controller.php");
 $data = new data_controller();

if(isset($_POST['send'])){
   $serial     = $data->escape_string($_POST['serial']);
   $model      = $data->escape_string($_POST['model']);
   $gadget     = $data->escape_string($_POST['gadget']);
   $damage     = $data->escape_string($_POST['damage']);
   $status     = $data->escape_string($_POST['status']);
   $client     = $data->escape_string($_POST['client']);
   $comment    = $data->escape_string($_POST['comment']);

   if(!empty($serial) && !empty($model) && !empty($gadget) && !empty($damage) && !empty($comment)){
    
      $data->send_gadget( $serial, $model,  $gadget ,$damage , $status, $client, $comment);
      $data->send_message($client, $serial, $comment);
      $_SESSION['item'] ='<div class="alert alert-success " role="alert">Request Sent Successfully</div>  ';
      header("location:../view_user/user-item-list.php");
   
    }
    else{

      $_SESSION['item'] ='<div class="alert alert-danger " role="alert">Request Sending Failed!</div>  ';
      header("location:../view_user/user-item-list.php");
    }
}
?>