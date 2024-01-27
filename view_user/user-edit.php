<?php
session_start();
require("../controller/data_controller.php");
include("user-header.php");

$data = new data_controller();


    $result = $data->display_user_via_username($_SESSION['username']);
    $row = mysqli_fetch_assoc($result);

?>

<form method="POST" action="../user_processor/user_update.php">

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-5 shadow my-5">
                <h2 class="text-center p-4">Edit Profile <span class="text-primary"><?php echo $_SESSION['username'] ?></span>  </h2>
            <div class="form-group">
        <span>Last Name</span>
    <input type="text" class="form-control" name="lastname" value="<?php echo $row['u_lname']; ?>">  
</div>  
    <div class="form-group">
        <span>First Name</span>
            <input type="text" class="form-control" name="firstname" value="<?php echo $row['u_fname'];?>">
                </div>
            <div class="form-group">
        <span>Middle Name</span>
    <input type="text" class="form-control" name="m" value="<?php echo $row['u_m'];?>">   
</div>
            <div class="form-group">
        <span>Email</span>
    <input type="email" class="form-control" name="email" value="<?php echo $row['u_email'];?>">            
</div>
    <div class="form-group">
        <span>Mobile Number</span>
            <input type="number" class="form-control" name="mobile" value="<?php echo $row['u_mobile'];?>">          
                </div>
            <div class="form-group">
        <span>Address</span>
    <input type="text" class="form-control" name="address" value="<?php echo $row['u_address'];?>">        
</div>
<div class="form-group">
        <span>House Number</span>
    <input type="text" class="form-control" name="house" value="<?php echo $row['u_house'];?>">        
</div>
    <div class="text-center p-3">
       <a  href="user-index.php" class="btn btn-danger" style="width:48%">Cancel</a>
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
            <button class="btn btn-primary w-50 " name="edit">Update</button>
            
            </div>
            </div>
        </div>
    </div>
</form>

<?php include("user-footer.php"); ?>