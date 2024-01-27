!<!--Login user modal--->
<form action="../view/users/user-index.php" method="POST">
  <div class="modal fade" id="loginuser">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="container">
    <div class="row justify-content-center">
  <div class="col-md-8">
<div class="modal-content ">
  <div class="modal-title text-center">
     
    <i style="font-size:130px;" class="fa fa-user-lock  text-dark border my-5"></i>  
 
  </div>
<div class="modal-body">   
  <div class="form-group">
    <i class="fas fa-user"></i> Username
      <input class="form-control" type="text" name="username">
        </div><!--class form-group-->
      <div class="form-group">      
    <i class="fa fa-eye-slash"></i> Password
  <input  class="form-control" type="password" name="password">        
</div><!--class form-group-->
  </div><!--modal-body-->
    <div class="modal-footer bg-light">
      <button class="btn btn-danger w-50" >Cancel</button>
      <button class="btn btn-primary w-50" type="submit" name="login"> Login <i class="fa fa-sign-in-alt"></i></button>
      
        </div><!--modal-footer-->
      </div><!--modal-content-->
    </div><!--col-->  
  </div><!--row-->
</div><!--container-->
  </div><!--modal-dialog-->
    </div><!--modal fade-->
      </form><!--form-->


