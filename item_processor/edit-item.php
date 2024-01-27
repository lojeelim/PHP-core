<?php session_start();
 require("../controller/data_controller.php");
 $data = new data_controller();

if(isset($_POST['edit'])){
   $serial     = $data->escape_string($_POST['serial']);
   $model      = $data->escape_string($_POST['model']);
   $gadget     = $data->escape_string($_POST['gadget']);
   $damage     = $data->escape_string($_POST['damage']);
   $dics       = $data->escape_string($_POST['disc']);

      $data->edit_item( $serial, $model,  $gadget ,$damage , $dics);
      $_SESSION['item'] ='<div class="alert alert-success " role="alert">Request Update Successfully</div>  ';
      header("location:../view_user/user-item-list.php");

}
?>