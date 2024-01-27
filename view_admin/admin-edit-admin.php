
<?php
session_start();
require("../controller/data_controller.php");
include("admin-header.php");
include("admin-navigator.php");
$data = new data_controller();
if(isset($_REQUEST['username'])){
    $username = $data->escape_string($_REQUEST['username']);
    $result = $data->display_admin_via_username($username);
    $row = mysqli_fetch_assoc($result);
}
?>

  <?php //echo $row['serial'] ?>

<form method="POST" action="../admin_processor/admin-edit.php" novalidate >
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow">
                <h2 class="text-center p-4">Update <?php echo $row['a_username'];?></h2>
            <div class="form-group">
        <span>Email</span>
    <input type="email" class="form-control" name="email" value="<?php echo $row['a_email'];?>">            
</div>
    <div class="form-group">
        <span>Mobile Number</span>
            <input type="number" class="form-control" name="mobile" value="<?php echo $row['a_mobile'];?>">          
                </div>

    <div class="text-center p-3">
        <a href="admin-admin-view.php" class="btn btn-danger" style="width:48%">Cancel</a>
            <input type="hidden" name="username" value=<?php echo $row['a_username'] ?>>
            <button class="btn btn-primary w-50" name="edit">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>


<?php include("admin-footer.php"); ?>


