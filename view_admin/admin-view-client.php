<?php
require("../controller/data_controller.php");
include("admin-header.php");

$data = new data_controller();

if(isset($_REQUEST['username'])){
    $username = $data->escape_string($_REQUEST['username']);
    $result = $data->display_user_via_username($username);
    $row = mysqli_fetch_assoc($result);
}
?>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5 border">
                <h2 class="text-center text-primary p-4"><?php echo $row['u_username'];?> <span class="text-dark">INFO</span></h2>
            <div class="form-group">
        <span>Last Name</span>
    <input type="text" disabled class="form-control bg-light" value="<?php echo $row['u_lname']; ?>">  
</div>  
    <div class="form-group">
        <span>First Name</span>
            <input type="text" disabled class="form-control bg-light" value="<?php echo $row['u_fname'];?>">
                </div>
            <div class="form-group">
        <span>Middle Name</span>
    <input type="text" disabled class="form-control bg-light" value="<?php echo $row['u_m'];?>">   
</div>
    <div class="form-group">
        <span>Username</span>
            <input type="text" disabled class="form-control bg-light" value="<?php echo $row['u_username'];?>">
                </div>
            <div class="form-group">
        <span>Email</span>
    <input type="email" disabled class="form-control bg-light" value="<?php echo $row['u_email'];?>">            
</div>
    <div class="form-group">
        <span>Mobile Number</span>
            <input type="number" disabled class="form-control bg-light" value="<?php echo $row['u_mobile'];?>">          
                </div>
            <div class="form-group">
        <span>Address</span>
    <input type="text" class="form-control bg-light" disabled  value="<?php echo $row['u_address'];?>">        
</div>
    <div class="text-center p-3">
        <a href="admin-client-view.php" class="btn btn-primary btn-block">Back</a>
            </div>
            </div>
        </div>
    </div>

<?php include("admin-footer.php"); ?>