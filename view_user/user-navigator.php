<!-- Open side nav -->
<?php 
require("../controller/data_controller.php");
$data = new data_controller();
unset( $_SESSION['changepass_u']);
?>
<div class="navbar position-absolute  my-4 py-5 ">
  <ul class="nav navbar-nav ">
    <div class="navbar-brand text-center">
      <img class="shadow-sm border border-light p-2 rounded " src="../index/img/icon.png" alt="" style="width:130px;"><br>
        <a href=""><i class="fa fa-camera-retro border p-2 my-2 rounded shadow-sm"></i></a><br>
      <small class="text-sm">Username: <?php echo $_SESSION['username'];?> </small>
    </div>
  <li class="nav-item text-center">
<a class="nav-link mb-2" href="#"  data-toggle="collapse" data-target="#settings" aria-controls="navbarResponsive" aria-expanded="false">
  <i class="fa fa-cog  fa-lg fa-spin"></i> Settings 
    </a> 
      <div class="collapse border rounded" id="settings">
        <a class="nav-link text-left p-2" href="user-edit.php">
      <i class="fas fa-pen fa-sm"></i> Edit Profile
    </a>
  <a class="nav-link text-left p-2" href="user-changepass.php?username=<?php echo $_SESSION['username']?>"> 
<i class="fas fa-pen fa-sm "></i> Change Password
  </a>
    </div>
      </li>
        <div class="dropdown-divider dropdown-block"></div>
      <li class="nav-item text-center">           
    <a class="nav-link bg-primary shadow-sm text-light rounded p-3 btn-block " data-toggle="modal" data-target="#service"><i class="fa fa-tools">
  </i><span> Repair Now</span></a>
</li>  
  <div class="dropdown-divider dropdown-block"></div>
    <li class="nav-item border rounded">           
      <a class="nav-link p-3 " href="../view_user/user-index.php">
        <i class="fa fa-home fa-lg "></i>
      <span class="p-2 ">Home</span></a>
    </li>
  <div class="dropdown-divider dropdown-block"></div>
    <li class="nav-item border rounded">           
      <a class="nav-link p-3 " href="../view_user/user-item-list.php">
        <i class="fa fa-list fa-lg"></i>
        <span class="p-2">Pending Item <span class="badge badge-danger"><?php  echo $data->client_count_pending_item($_SESSION['username']); ?></span></a>
      </li>
      <div class="dropdown-divider dropdown-block"></div>
    <li class="nav-item border rounded">           
      <a class="nav-link p-3 " href="../view_user/user-underprocess-item.php">
        <i class="fa fa-wrench fa-lg"></i>
        <span class="p-2">Under Process </span></a>
      </li>
      <!-- client_count_underprocess_item -->
    <div class="dropdown-divider dropdown-block"></div>
  <li class="nav-item border rounded">           
<a class="nav-link p-3" href="done-list.php">
  <i class="fa fa-newspaper fa-lg">
  </i><span class="p-2">Active item <span class="badge badge-danger"><?php  echo $data->client_count_done_item($_SESSION['username']); ?></span></span></span></a>
    </li>

    </li>
    <div class="dropdown-divider dropdown-block"></div>
  <li class="nav-item border rounded">           
<a class="nav-link p-3" href="../view_user/user-done-transaction.php">
  <i class="fa fa-check fa-lg ">
  </i><span class="p-2">Done  Item <span class="badge badge-danger"><?php  echo $data->count_client_all_transac($_SESSION['username']); ?></span></span></a>
    </li>
      </ul>
        </div>

<!-- Close side nav -->

<!--Main nav-->

<nav class="navbar navbar-expand-md navbar-light bg-light shadow-lg  fixed-top sticky-top p-2">       
<!--main nav button-->
<a class="navbar-brand rounded" data-toggle="collapse" data-target="#topnav" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span>
        <i class="border border-primary shadow-sm text-primary p-2  rounded">Findfix</i>
</span>
</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
      </button>
      
<!-- Open Collapse -->
        <div class="collapse navbar-collapse" id="navbarResponsive">


        <ul class="nav navbar-nav ml-auto text-right">

    <li class="nav-item dropdown no-arrow mx-1 ">
  <a class="nav-link " href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-bell fa-fw fa-lg "></i><!-- Counter - Alerts -->
  <span class="badge badge-danger badge-counter"><?php echo $data->count_client_done_fix($_SESSION['username']) ?></span>
    </a><!-- Dropdown - Alerts -->

       <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">Notifications</h6>
    <?php $result = $data->display_client_done_fix($_SESSION['username']);
          while($row = mysqli_fetch_assoc($result)):
    ?>
      <a class="dropdown-item d-flex align-items-center p-3" href="user-pay-done-item.php?id=<?php echo $row['id'] ?>">
    <div class="mr-3">
  <div class="icon-circle bg-primary">
<i class="fas fa-file-alt text-white"></i>
  </div>
    </div>
       <div>
            <input type="text" name="" id="" value="<?php echo $row['id'] ?>">
          <div class="small text-gray-500"><?php echo "From "."<span class='text-primary'>".$row['technician']."</span>" ?></div>
        <span class="font-weight-bold"><?php echo "Done Repair "."<span class='text-primary'>".$row['item']."</span>" ?></span><br>
            <span><?php echo "Date: "."<span class='text-primary'>".$row['date']."</span>" ?></span>
      </div>
    </a>
    <hr> 
<?php  endwhile ?>
          <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
          </li>
         
  <!-- MESSAGES-->
     
        <li class="nav-item dropdown no-arrow mx-1 ">
      <a class="nav-link " href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fas fa-envelope fa-fw fa-lg"></i><!-- Counter - Messages -->
  <span class="badge badge-danger badge-counter"></span>
</a><!-- Dropdown - Messages -->
  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
    <h6 class="dropdown-header">Messages</h6>
     



    <a class="dropdown-item d-flex align-items-center" href="#">
  <div class="dropdown-list-image mr-3">
    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">

    </div>
  </a>
    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
      </div>
        </li>
        
<!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow border rounded">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
    <img class="img-profile rounded-circle" style="width:20px;" src="../img/user.png">
  </a> <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-center" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
          </a>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
  </a>
    </div>
      </li><!--user info End-->
        </ul><!--List End-->
      </div><!-- div collapse -->
    </nav><!--End Nav-->  


<!--NOTE: out side from the nav Logout Modal-->
<form action="../Sessions/logout.php" method="POST">
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">   
      <div class="modal-content ">
        <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">
    Ready to Leave?
  </h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span> 
    </button>
      </div>
        <div class="modal-body">
      Do you really want to logout? click "Logout"
    </div>
  <div class="modal-footer">
<button class="btn btn-secondary" data-dismiss="modal" >
  Cancel
    </button>
      <button class="btn btn-primary" name="logout">
        Logout
      </button>
    </div>
  </div>
    </div>
      </div>
        </form>
  