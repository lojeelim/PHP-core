
<?php
session_start();
require("../controller/data_controller.php");
include("admin-header.php");
include("admin-navigator.php");
$data = new data_controller();
if(isset($_REQUEST['serial'])){
    $serial = $data->escape_string($_REQUEST['serial']);
    $result = $data->display_all_item_client($serial);
    $row = mysqli_fetch_assoc($result);
     $_SESSION['serial'] = $row['serial'];
}
?>
  <?php //echo $row['serial'] ?>

<div class="p-4  bg-light text-center">
<h4 class="mb-4">REQUESTED ITEM</h4>
<table class="table table-striped responsive-table shadow-sm text-center">
    <thead>
        <tr>
            <td>SERIAL_CODE</td>
            <td>MODEL</td>
            <td>ITEM</td>
            <td>STATUS</td>
            <td>DATE_SEND</td>
            <td>CLIENT</td>
            <td>APPROVE_BY</td>
        </tr>
    </thead>
    <tbody>
        <tr> 
            <td class="text-primary"><?php echo $_SESSION['serial']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['gadget']; ?></td>
            <td class="text-danger"><?php echo $row['status']; ?></td>
            <td><?php echo $row['date_send']; ?></td>
            <td><?php echo $row['client']; ?></td>
            <td><?php echo $_SESSION['a_username']; ?></td>
        </tr>
    </tbody>
</table>
</div>

<section class="mb-5 shadow-sm ">
<div class="row justify-content-center">
    <div class="col-10 shadow my-5">
    <h2 class="text-center my-4">Available Technician</h2>
    <div class="row justify-content-center ">
    <?php 
        $result = $data->display_tech();
        while($row = mysqli_fetch_assoc($result)):
    ?>
        <div class="col-md-4 col-sm-5 col-lg-4 my-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4> <?php echo $row['t_username']; ?></h4>
                </div>
            <div class="card-body p-5 text-center">      
            <img class="shadow-sm border border-light p-2 rounded " src="../index/img/icon.png" alt="" style="width:130px;"><br>
        </div>
    <div class="card-footer text-center">
        <form action="../admin_processor/admin_assign_tech.php" method="POST">
            <input type="hidden" name="admin" value="<?php echo $_SESSION['a_username']; ?>">
            <input type="hidden" name="serial" value="<?php echo $_SESSION['serial'] ?>">
            <input type="hidden" name="username" value="<?php echo $row['t_username'];?>">
                <button class="btn btn-primary w-50" name="assign">Assign</button>
                    </form>
                </div>
            </div>
        </div>        
        <?php endwhile ?>
<!-- row -->
</div>
    </div>
</div>

</section>



<?php include("admin-footer.php"); ?>






<!-- <div class="modal fade " id="assign">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content rounded">
            <div class="modal-title ">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm">Available Technician</h4>  
                <p><?php echo $_SESSION['serial'] ?> </p>
            </div>
            <div class="modal-body"> 
            <div class="row">

            <?php   
                // if(isset($_POST['assign'])){
                //     $serial = $data->escape_string($_REQUEST['serial']);
                // } -->

               $result = $data->display_tech();
               while($row = mysqli_fetch_assoc($result)):
            ?>
                <div class="col-md-6 col-sm-5 my-4">
                    <div class="card">
                    <div class="card-header text-center">
                       <h4> <?php echo $row['t_username']; ?></h4>
                    </div>
                    <div class="card-body p-4 text-center">
                           
                    </div>
                    <div class="card-footer text-center">
                    <form action="../admin_processor/admin_assign_tech.php" method="POST">
                        <input type="hidden" name="username" value="<?php echo $row['t_username'];?>">
                    <button class="btn btn-primary w-50" name="assign">Assign</button>
                    </form>

                        
                    </div>
                </div>
                </div>
        
            <?php endwhile ?>


            </div>      
        </div>modal-body  -->
        <!-- </div>modal-content -->
    <!-- </div>modal-dialog -->
<!-- </div>modal fade -->
<!-- close modal -->

