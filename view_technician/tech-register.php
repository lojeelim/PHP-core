<?php 
session_start();
if(isset($_SESSION['t_username'])){
  header("location:../view_technician/tech-index.php");
}
include("tech-header.php");?>

<form class="" action="../tech_processor/tech_register.php"  method="POST"> 
  <?php if(isset($_SESSION['reg'])){
      echo $_SESSION['reg'];
    }?>
  <div class="row justify-content-center my-4"> 
    <div class="col-md-4 shadow-lg border border-light mb-5 ">     
      <div class="card-title shadow-sm">
        <h4 class="text-center my-2 p-3 bg-primary text-light rounded shadow-sm">Technician Register Form</h4>
          </div>
        <div class="card-body">
      <span>Last Name</span>
  <input class="form-control" type="text" name="lname">
    <span>First Name</span>
      <input class="form-control" type="text" name="fname">
        <span>Middle Name</span>
          <input class="form-control" type="text" name="m">
        <span>Username</span>
      <input class="form-control"  type="text" name="username">
    <span>Email</span>
  <input class="form-control" type="email" name="email">
    <span>Mobile</span>
      <input class="form-control" type="number" name="mobile">         
        <span>Address</span>
          <input class="form-control" type="text" name="address">
        <span>Pasword</span>
      <input class="form-control" type="password"  name="password">
    <span>Confirm Password</span>
  <input class="form-control" type="password" name="confirm password"><br>
    </div><!--close card body--->
      <div class="card-footer bg-light text-center">
        <a class="btn btn-danger"  style="width:48%;"  href="../Sessions/cancel.php" name="cancel" >
          Cancel</a>
        <button class="btn btn-primary w-50 " type="submit" name="register">
      Register<i class="fa fa-sign-in-alt"></i>
    </button> 
  </div>
    </div><!--Close col--->
      </div><!--Close row-->
        </form><!--close form-->
<?php include("tech-footer.php");?>
