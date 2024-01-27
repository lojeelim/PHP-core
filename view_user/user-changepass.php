<?php 
session_start();
require("../controller/data_controller.php");
include("user-header.php"); 

$data = new data_controller();

if(isset($_SESSION['changepass_u'])){
    echo $_SESSION['changepass_u']; 
}   
?>   

<form class="my-5 py-5" action="../user_processor/user_change_pass.php" method="POST">
    <div class="row justify-content-center ">
  
        <div class="col-lg-4 col-md-4 col-sm-4 p-4 shadow rounded">
        <h3 class="text-center p-4 shadow-sm">Change Password</h3>
            <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
              <div class="forn-group mb-4">
            <span>New Password</span>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="forn-group mb-4">
            <span>Confirm New Password</span>
                <input name="confirmpassword" type="password" class="form-control">
            </div>
            <div class="forn-group text-center">
            <a  href="../view_user/user-index.php" class="btn btn-danger">Cancel</a>
            
           
            <button class="btn btn-primary" name="change">Change</button>
            
            </div>
            
        </div>
    </div>

</form>

