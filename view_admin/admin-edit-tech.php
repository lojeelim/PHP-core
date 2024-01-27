<?php
require("../controller/data_controller.php");
include("admin-header.php");

$data = new data_controller();

    if(isset($_REQUEST['username'])){
        $username = $data->escape_string($_REQUEST['username']);
        $result = $data->display_tech_via_username($username);
        $row = mysqli_fetch_assoc($result);
    }
?>

<form method="POST" action="" novalidate>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5 border">
                <h2 class="text-center p-4">Update Technician</h2>
            <div class="form-group">
        <span>Last Name</span>
    <input type="text" class="form-control" value="<?php echo $row['t_lname']; ?>">  
</div>  
    <div class="form-group">
        <span>First Name</span>
            <input type="text" class="form-control" value="<?php echo $row['t_fname'];?>">
                </div>
            <div class="form-group">
        <span>Middle Name</span>
    <input type="text" class="form-control" value="<?php echo $row['t_m'];?>">   
</div>
    <div class="form-group">
        <span>Username</span>
            <input type="text" class="form-control" value="<?php echo $row['t_username'];?>">
                </div>
            <div class="form-group">
        <span>Email</span>
    <input type="email" class="form-control" value="<?php echo $row['t_email'];?>">            
</div>
    <div class="form-group">
        <span>Mobile Number</span>
            <input type="number" class="form-control" value="<?php echo $row['t_mobile'];?>">          
                </div>
            <div class="form-group">
        <span>Address</span>
    <input type="text" class="form-control" value="<?php echo $row['t_address'];?>">        
</div>
    <div class="text-center p-3">
        <button class="btn btn-danger" style="width:48%">Cancel</button>
            <button class="btn btn-primary w-50">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include("admin-footer.php"); ?>