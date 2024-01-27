<?php 
session_start();
unset($_SESSION['msg']);
 include("admin-header.php");
 include("admin-navigator.php");
?>


<h3 class="text-center">Welcome <?php echo $_SESSION['a_username']; ?></h3>
<div class="row justify-content-center  "> 
    <div class="col-md-5 col-sm-5 col-lg-5">
    <div class="my-5 p-5">
            <h4 class="text-primary">Total Earnings</h4>
            <h1 class="text-center  border shadow p-5"  style="border-radius:360px;"><?php echo "₱ ".$data->total_admin_earn() ?></h1>
    </div>
</div>

<?php include("admin-footer.php"); ?>
