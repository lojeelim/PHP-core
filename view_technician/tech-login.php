<?php
session_start();
if(isset($_SESSION['t_username'])){
  header("location:../view_user/user-index.php");
}
include("tech-header.php");
?>

<div class="container my-lg-5 p-5 ">
  <form class="" action="../tech_processor/tech_login.php" method="POST">
    <div class="row justify-content-center">
      <div class="col-md-0 border shadow-lg">
        <?php if(isset($_SESSION['msg']))
               echo $_SESSION['msg'];?>
        <div class="card-header bg-primary text-center">    
      <h2 class=" text-light"> Technician Login</h2>
    </div>
  <div class="card-body">
<div class="form-group">
  <span><i class="fa fa-user"></i> Username</span>
    <input class="form-control" type="text" name="username" >
      </div>
        <span><i class="fa fa-eye"></i> Password</span>
      <div class="form-group">
    <input class="form-control" type="password" name="password" >
  </div>
</div>
  <div class="card-footer">
    <a class="btn btn-danger" href="../Sessions/cancel.php" name="cancel" style="width:47%">Cancel</a>  
      <button class="btn btn-primary w-50" name="btnlogin">Login <i class="fa fa-sign-in-alt"></i></button>
        </div>
      </div><!--col--->
    </div><!---row-->
  </form>
</div>


<?php  include("tech-footer.php");?>