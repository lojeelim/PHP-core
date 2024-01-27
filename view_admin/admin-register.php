<?php 
session_start();
// if(isset($_SESSION['t_username'])){
//  header("location:../view_user/user-index.php");
// }
include("admin-header.php");?>

<form class="" action="../admin_processor/admin_register.php"  method="POST"> 
  <?php if(isset($_SESSION['reg'])){
      echo $_SESSION['reg'];
    }?>
  <div class="row justify-content-center "> 
    <div class="col-md-4 shadow-lg border border-light my-5 ">     
      <div class="card-title shadow-sm">
        <h4 class="text-center my-2 p-3 bg-primary text-light rounded shadow-sm">New Admin Form</h4>
          </div>
        <div class="card-body">
        <span>Username</span>
      <input class="form-control"  type="text" name="username">
    <span>Email</span>
  <input class="form-control" type="email" name="email">
    <span>Mobile</span>
      <input class="form-control" type="number" name="mobile">         
        <span>Pasword</span>
      <input class="form-control" type="password"  name="password">
    <span>Confirm Password</span>
  <input class="form-control" type="password" name="confirm password"><br>
    </div><!--close card body--->
      <div class="card-footer bg-light text-center">
        <a class="btn btn-danger"  style="width:48%;"  href="admin-admin-view.php" name="cancel" >
          Cancel</a>
        <button class="btn btn-primary w-50 " type="submit" name="register">
      Create  <i class="fa fa-plus"></i>
    </button> 
  </div>
    </div><!--Close col--->
      </div><!--Close row-->
        </form><!--close form-->
<?php include("admin-footer.php");?>
