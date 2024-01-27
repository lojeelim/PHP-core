<?php

require("../Sessions/check-if-login-session.php");
include("header.php");
require("../controller/data_controller.php");

$data = new data_controller();
?>
<!--<style>@keyframes slide{0%,100%{background-image:url(img/5.jpeg);}20%{background-image:url(img/7.jpeg);}}</style>  <i class="fa fa-home"></i> uses solid style -->
<!--end top header "Home"-->
<!---div class="card  text-center shadow-lg bg-light  p-1">
i can put  ads here
</div>--->

<?php  include("navigator.php");?><!--include nav-->  
  <div class="container-fluid">  
    <div class="row justify-content-center "> 
      <div class="col-md-13"><!-- Page Content -->  
<!---open Slider--->
        <div id="carouselExampleIndicators" class="carousel slide "  data-ride="carousel">
      <ol class="carousel-indicators"><!--Indicator-->
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol><!--Close Indicator-->
    
      <div class="carousel-inner" role="listbox"><!--content image1-->
        
        <div class="carousel-item active">
   
        </div><!---Close image1-->

        <div class="carousel-item" ><!--image2-->
     
        </div><!---Close image2-->

        <div class="carousel-item" ><!--image3-->
      
        </div><!--Close image3-->
    <!--Buttons-->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
    </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a><!--Close button--->
  </div>
<!--close slider-->

<!--Open bottom Nav-->
<div class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
  <ul class="navbar-nav ml-auto text-center">
    <li class="nav-item dropdown no arrow mx-1 active">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#"  aria-haspopup="true" erial-expanded="false">
        <i  class="fa fa-tools text-primary fa-2x"></i>   
        Services
      </a>
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-center" aria-labelledby="userDropdown">
  <h6 class="dropdown-header text-center text-primary">Repair</h6>
<div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">
    Cracked Screen
      </a>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
     Water Damage
    </a>
  <div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
  Speaker Not Working
    </a>
      <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
      No Signal
    </a>
  <div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
  Dead Battery
    </a>
      <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
      Other Problem
    </a>
  </div><!--dropdow menu-->
</li>
  </ul>     
    </div>
<!--nav close-->

  <section class="content-section  mb-5 ">
    <div class="row justify-content-center">

      <div class="col-lg-2 col-md-2 col-sm-2 my-4 text-center p-4 mr-3 rounded  shadow">
        <i class="fa fa-thumbs-up text-secondary"></i>  
          <a class="" href="">
        <h2>30</h2>
      </a>
    <span class="text-secondary">
  Satisfied Customer
    </span>
      </div> 


  <div class="col-lg-2 col-md-2 col-sm-2 my-4 text-center p-4 mr-3 rounded shadow">
    <i class="fa fa-users text-secondary fa-2x"></i>     
      <h2><?php echo $data->count_tech();?></h2>
        <div class="row no-gutters align-items-center">
          <div class="col">
            <div class="progress progress-sm mb-2 ">
              <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo $data->count_tech();?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      <span class="text-secondary">
    Qualified Employee</span>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-2 my-4 text-center p-4 mr-3 rounded shadow">
    <i class="fa fa-user text-secondary fa-2x"></i>  
      <h2><?php echo $data->count_client();?></h2>
        <div class="row no-gutters align-items-center">
          <div class="col">
            <div class="progress progress-sm mb-2 ">
              <div class="progress-bar bg-primary" role="progressbar" style="width:<?php echo $data->count_client();?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div> 
      <span class="text-secondary">
    Registered Client</span>
  </div>


        <div class="col-lg-2 col-md-2 col-sm-2 my-4 text-center p-4 mr-3 rounded shadow">
      <i class="fa fa-tools text-secondary"></i>  
    <a class="" href="">
  <h2>524</h2>
    </a>
      <span class="text-secondary">Successful Repairs</span>
        </div>
  </div>
</section>


<section class="content-section mb-6">
  <div class="contanier bg-light">
    <div class="content-section-heading ">  
      <h1 class=" text-center p-4">
        Why Choose us?
      </h1>
    </div>
  <div class="row justify-content-center">
<div class="col-sm-7 col-md-7 col-lg-7 mb-5 card border-warning  ">
  <div class="card-header col-7 bg-warning rounded">
    <h2 class="text-dark text-left"><i class="fa fa-piggy-bank text-white">
      </i> Low Price Guarantee
        </h2>
      </div>
    <div class="card-body">
  <p class="text-secondary">
  Repairing beats Replacing and<br>
  ifix Provides Technicians at lower price.
  </p>
    </div><!---card-body-->
  </div><!--col-->      

  <div class="col-sm-7 col-md-7 col-lg-7 mb-5 card border-info shadow-sm">
    <div class="card-header col-7 bg-info rounded ">
      <h2 class="text-dark text-left">
        <i class="fa fa-certificate text-white "></i>
          Superior Warranty
        </h2>
      </div>
    <div class="card-body">
  <p class="text-secondary">
  Stronger than any phone case<br>
    ifix offer reliable warranty on the market.
      </p>
        </div><!---card-body-->
          </div><!--col-->

  <div class="col-sm-7 col-md-7 col-lg-7 mb-5 card border-success shadow-sm">
    <div class="card-header col-7 bg-success rounded">
      <h2 class="text-dark text-left">
        <i class="fa fa-clock text-white "></i>
          On Time Duty
        </h2>
      </div>
    <div class="card-body">
  <p class="text-secondary">
    When your phone breaks,<br>
    you don't want it fixed tomorrow
    you need it fixed today.
  </p>
    </div><!---card-body--> 
      </div><!--row-->
          </div><!--col-->
            </div><!--container-->
  </section><!--section --->


<section class="bg-light my-5">
  <h1 class=" text-center p-4">WE REPAIR THESE TYPES OF GADGETS</h1> 
    <div class="row">
  <div class="col-lg-4 p-3">  
    <div class="card-header text-center">
      <h4> <i class="fa fa-mobile-alt text-primary"></i> Phones</h4>
        </div>
          <div class="card-body text-center">
        <img  src="img/phon.png" alt="phone">
      </div>
    <div class="card-footer text-center">
  <button class="btn btn-primary">Read more</button>
    </div>
      </div><!--col-->
    
  <div class="col-lg-4 p-3">
    <div class="card-header text-center">
      <h4> <i class="fa fa-tablet-alt text-primary"></i> Tablets</h4>
        </div>
          <div class="card-body text-center"> 
        <img  src="img/tab.png" alt="tablet">   
      </div>
    <div class="card-footer text-center">
  <button class="btn btn-primary">Read more</button>
    </div>
      </div><!--col-->


  <div class="col-lg-4 p-3">
    <div class="card-header text-center">
      <h4> <i class="fa fa-laptop text-primary"></i> Laptops</h4>
        </div>
          <div class="card-body text-center">
        <img src="img/lap.png" alt="labtop">
      </div>
    <div class="card-footer text-center">
  <button class="btn btn-primary">Read more</button>
    </div>
      </div><!--col-->  
    </div><!--row-->
  </section>

  </div><!--CLOSE row-->
</div><!--container--> 
<?php  include("footer.php"); ?>