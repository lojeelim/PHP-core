<?php 
unset($_SESSION['reg']);

if(!isset($_SESSION['a_username'])){
  header("location:../index/index.php");
}
require_once("../controller/data_controller.php");
$data = new data_controller();
?>


<!--Main nav-->
<nav class="navbar navbar-expand-md navbar-light bg-light shadow  mb-5 fixed-top sticky-top">
  <!--top-nav-button--->
    <!--main nav button-->
    <a class="navbar-brand rounded" data-toggle="collapse" data-target="#topnav" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span>
        <i class="border border-primary shadow-sm text-primary p-2  rounded">Findfix</i>
       </span>
    </a>
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
    <div class="collapse navbar-collapse navbar" id="navbarResponsive">
<!-- Nav Item - User Information -->
    <!--NOTIFICATIONS-->
<ul class="nav navbar-nav ml-auto text-right">
  <li class="nav-item">
    <a class="nav-link  text-center " href="admin-index.php"> 
      <span>Home</span>
      <i class="fa fa-home fa-lg text-primary  "></i>
    </a>
  </li>


  <li class="nav-item dropdown no-arrow">
    <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span>Data List</span>
      <i class="fa fa-list fa-lg"></i></a> <!-- Dropdown - record Information -->
        <div class="dropdown-list dropdown-menu  shadow animated--grow-in p-1 " aria-labelledby="userDropdown">
      <h6 class="dropdown-header">View Data List</h6>  
    <div class="dropdown-divider"></div>
  <a class="nav-link" href="admin-client-view.php"><i class="fa fa-user fa-lg"></i> Client</a>
    <div class="dropdown-divider"></div>  
      <a class="nav-link" href="admin-admin-view.php"><i class="fa fa-user-secret fa-lg"></i> Admin</a>
        <div class="dropdown-divider"></div>
      <a class="nav-link" href="admin-tech-view.php"><i class="fa fa-users fa-lg"></i> Technician</a>
    <div class="dropdown-divider"></div>  
  <a class="nav-link" href="admin-item-view.php"><i class="fa fa-mobile-alt fa-sm"></i><i class="fa fa-laptop fa-sm"></i> 
   Request Item</a> 
  </div>
  </li><!--record info End-->


  <li class="nav-item dropdown no-arrow ">
    <a class="nav-link " href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span>Notification</span>
      <i class="fas fa-bell fa-lg"><small> </small><!--Notification---></i><!-- Counter - Alerts -->
    
      <span class="badge badge-danger badge-counter"><?php echo $data->count_message_for_admin()?></span>
 
        <!-- <span class="badge badge-danger badge-counter">3+</span> -->
      </a><!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
  <h6 class="dropdown-header">Notifications</h6>
  <?php
    $result = $data-> display_message_for_admin();
    while($row = mysqli_fetch_assoc($result)):
   ?>
    <a class="dropdown-item d-flex align-items-center p-4" href="admin-item-view.php">
      <div class="mr-3">
        <div class="icon-circle bg-primary">
      <i class="fas fa-file-alt text-white"></i>
    </div>
  </div>
    <div>
       <div class="small text-primary"><?php echo "<span class='text-dark'>From Client </span>".$row['client'] ?></div>
        <span class="font-weight-bold"><?php echo "You Received Request item "."<span class='text-primary'>".$row['item']."</span>"?></span>
        <div class="small text-gray-500"><?php echo "Requested on "."<span class='text-primary'>".$row['date']."</span>" ?></div>
        <div class="dropdown-divider"></div>
      </div>
    </a>
    <?php endwhile  ?>
      <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
    </div>
  </li>

     <!-- MESSAGES-->
  <li class="nav-item dropdown no-arrow ">
  
   
    <a class="nav-link  mr-4" href="" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span>Messages</span>
      <i class="fas fa-envelope fa-lg"><!--Message--></i><!-- Counter - Messages -->
        <!-- <span class="badge badge-danger badge-counter">7</span> -->
      </a><!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
  <h6 class="dropdown-header">Messages</h6> 
    <a class="dropdown-item d-flex align-items-center" href="../admin-item-view.php">
      <div class="dropdown-list-image ">
        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
      <div class="status-indicator bg-success"></div>
    </div>
  <div class="font-weight-bold">
    <div class="text-truncate"><?php //echo $row['message'] ?></div>
      <div class="small text-gray-500"><?php// echo $row['client']."  ".$row['date'] ?></div>
        </div>
      </a>
 
    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
  </div>
 
  </li>

<!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['a_username']; ?> </span>
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

  </div><!--responsive-->
</nav><!--End Nav-->

            <!--NOTE: out side from the nav Logout Modal-->

<form action="../Sessions/logout.php" method="POST">
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm " role="document">   
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
    Logout</button>
      </div>
        </div>
      </div>
    </div>
</form>


