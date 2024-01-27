<?php session_start();
require("../Sessions/username.php");
include("user-header.php");
include("user-navigator.php");
include("../view_item/service-index.php");
unset( $_SESSION['edit_u']);
$data = new data_controller();
?>
    
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-7 col-lg-7">       
            <section class="bg-light shadow" style="height:105vh ; width:48em;">
                <div class="row justify-content-center">
                    
            <div class="col-md-12 col-lg-12 col-sm-12 my-5">
            <h2 class="text-center p-2  ">DONE ITEM</h2>
            <!-- 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>a
          </form>
             -->
                
        <table class="table table-striped responsive-table shadow-sm text-center mb-5">
            <thead>
 
                <tr>
                <th>RECIEPT NO</th>
                <th>CLIENT</th>
                <th>PAYMENT</th>
                <th>SERVICE FEE</th>
                <th>DATE DONE</th>
                <th>ITEM</th>
                <th>STATUS</th>
                <th>REMARKS</th>
            
                </tr>
            </thead>
            <tbody>
        <?php
            $result = $data->display_client_done_transac($_SESSION['username']);
            while($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
               
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['client'] ?></td>   
            <td><?php echo"₱".$row['price'] ?></td>
            <td><?php echo"₱".$row['service'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['serial'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td><?php echo $row['remarks'] ?></td>
            </tr>
        
        <?php endwhile ?>
            <tr>
                <td></td>
                <td></td>
                <td class="border p-2"><?php echo "<span>Total Paid </span>"."<h2>".$data->client_total_payment($_SESSION['username'])."</h2>"?></td>
            </tr>
            </tbody>

        </table>
            </div>  
                </div>
              
            </section>
        </div>
    </div>






<?php include("user-footer.php"); ?>


