<nav class="navbar navbar-expand-sm navbar-light bg-light p-3 fixed-top sticky-top">
  <div class="container">
    <!--nav content-->   
      <a class="navbar-brand logo grade color-white text-black" id="logo" href="#">
        <span>Repairman</span>
      <span>Finder</span> 
    <Span class="text-primary rounded border border-primary p-2">FindFix</Span> 
  </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
      </button><!--close othear nav cont      nt-->
    <!--collapse nav-->
  <div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto text-center">
  <?php if(!isset($_SESSION['id'])): ?>
    <li class="nav-item active">
      <a class="nav-link" href="#">
        <span class="sr-only">(current)</span>
      </a>
    </li>
  <li class="nav-item">
<a class="nav-link" href="#">About</a>
  </li> 
  <li class="nav-item">
<a class="nav-link" href="../index/index.php ">Home</a>
  </li> 
    <!--dropdown signup-->
      <li class="nav-item dropdown no arrow mx-1">
        <a class="nav-link dropdown-toggle" id="login"  role="button" data-toggle="dropdown"arial-haspopup="true" aria-expanded="false">Sign Up</a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <h6 class="dropdown-header text-center text-info">Register as</h6>
  <div class="dropdown-divider"></div>
<a class="dropdown-item p-3" href="../view_user/user-register.php">
  <i class="fa fa-user"></i> Client
    </a>
      <div class="dropdown-divider"></div>
        <a class="dropdown-item p-3" href="../view_technician/tech-register.php">
      <i class="fa fa-users"></i> Technician
    </a>
  </div><!--dropdow menu-->
</li><!--Close dropdown login-->
  <!--dropdown Login -->
    <li class="nav-item dropdown no arrow mx-1">
      <a class="nav-link dropdown-toggle" id="login"  role="button" data-toggle="dropdown" arial-haspopup="true " aria-expanded="false">
        <i class="fa fa-sign-in-alt"></i> Login
      </a>
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  <h6 class="dropdown-header text-center text-primary p-4"> Login as</h6>
<div class="dropdown-divider"></div>
  <a class="dropdown-item p-3" href="../view_user/user-login.php">
    <i class="fa fa-user "></i> Client
      </a>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item p-3" href="../view_technician/tech-login.php" >
    <i class="fa fa-users "></i> Technician</span> 
  </a>
<div class="dropdown-divider"></div>
  <a class="dropdown-item p-3" href="../view_admin/admin-login.php">
    <i class="fa fa-user-secret"></i> Admin
      </a>
        </div><!--dropdow menu-->
      </li><!--close dropdown sign up-->
      
    <?php else: ?>
  <li class="nav-item active">
<a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
  </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Events</a>
        </li> 
      <li class="nav-item">
    <a class="nav-link" href="#">Services</a>
  </li>
<li class="nav-item">
  <a class="nav-link" href="#">Home</a>
    </li>
      <?php endif ?>
        </ul><!--close UL--->
      </div><!--close collapse nav-->
    </div><!--Close container-->
  </nav><!---close nav--->


