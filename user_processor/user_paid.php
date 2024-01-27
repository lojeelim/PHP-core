<?php 
require("../controller/data_controller.php");
$data = new data_controller();

if(isset($_POST['paid'])){
$id = $data->escape_string($_POST['id']);
    $data->update_remarks_transaction($id,"Paid");
    $_SESSION['edit_u'] = '<div class="alert alert-success" role="alert">You now Paid! </div>';
    header("location:../view_user/user-done-transaction.php");
   
}

?>