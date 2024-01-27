<?php
session_start();
require_once("../controller/data_controller.php");
$data = new data_controller();
?>
<!--Main nav-->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-lg p-2  mb-5 fixed-top sticky-top">
  <!--top-nav-button--->
    <a class="navbar-brand rounded" data-toggle="collapse" data-target="#topnav" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span>
        <i class="border border-primary shadow-sm text-primary p-2  rounded">Findfix</i>
           
    
  </a >  
<!--main nav button-->
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button> 
          <div class="collapse navbar-collapse" id="navbarResponsive">
<!--NOTIFICATIONS-->
<ul class="nav navbar-nav ml-auto text-right">
  
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link " href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>Notifications</span>
      <i class="fas fa-bell fa-lg"></i><!-- Counter - Alerts -->

      <span class="badge badge-danger badge-counter">
      <?php echo $data->count_message_for_tech($_SESSION['t_username']) ?>
      </span>

      </a><!-- Dropdown - Alerts -->
     
  <div class="dropdown-list dropdown-menu  dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
      <h6 class="dropdown-header">Notifications</h6>
      <?php
        $result = $data->display_message_for_technician($_SESSION['t_username']);
        while($row = mysqli_fetch_assoc($result)):
      ?>
   <a class="dropdown-item d-flex align-items-center  " href="">
      <div class="mr-3">
        <div class="icon-circle bg-primary">
      <i class="fas fa-file-alt text-white"></i>
    </div>
  </div>
    <div>
       <div class="small text-primary"><?php echo "<span class='text-dark'>From </span>".$row['admin'] ?></div>
        <span class="font-weight-bold"><?php echo "<span class='text-primary'>".$row['admin']."</span>"." Assign you For This Item "."<span class='text-primary'>".$row['item']."</span>"?></span>
        <div class="small text-gray-500"><?php echo "Requested on "."<span class='text-primary'>".$row['date']."</span>" ?></div>
       <hr>
      </div>
    </a>
      <?php endwhile ?>
    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
  </div>
</li> 

<!-- MESSAGES-->
          <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Messages<i class="fas fa-envelope fa-fw"></i><!-- Counter - Messages -->
    <span class="badge badge-danger badge-counter"></span>
  </a><!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
      <h6 class="dropdown-header">Messages</h6>
      
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
        <div class="status-indicator bg-success"></div>
      </div>
    <div class="font-weight-bold">
  <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
    <div class="small text-gray-500">Emily Fowler · 58m</div>
      </div>
        </a>

    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
      </div>
        </li>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['t_username']; ?></span>
      <img class="img-profile rounded-circle" style="width:20px;" src="../img/user.png">
        </a> <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-center" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">
  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
</a>


<a class="nav-link mb-2" href="#"  data-toggle="collapse" data-target="#settings" aria-controls="navbarResponsive" aria-expanded="false">
  <i class="fa fa-cog  fa-lg fa-spin"></i> Settings 
</a>
    <!-- <div class="collapse border-top rounded" id="settings">
        <a class="nav-link text-left p-2" href="user-edit.php">
      <i class="fas fa-pen fa-sm"></i> Edit Profile
    </a>
  <a class="nav-link text-left p-2" href="user-changepass.php?username=<?php echo $_SESSION['username']?>"> 
<i class="fas fa-pen fa-sm "></i> Change Password
  </a>
  </div> -->

  <div class="dropdown-divider"></div>


          
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
        </a>
      </div>
   </li><!--user info End-->
</ul><!--List End-->
  </div>
    </nav><!--Close Nav-->  

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
        Logout
      </button>
    </div>
  </div>
    </div>
      </div>
        </form>
