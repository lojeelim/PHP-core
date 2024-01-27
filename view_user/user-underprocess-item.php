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
            <section class="bg-light shadow" style="height:105vh ; width:49em;">
                <div class="row justify-content-center">
                    
            <div class="col-md-12 col-lg-12 col-sm-12 my-5">
            <h2 class="text-center p-2  ">UNDER PROCESS ITEM</h2>
            <!-- 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
             -->
            <?php if(isset($_SESSION['item'])){
                      echo $_SESSION['item'];}?> 
        <table class="table table-striped responsive-table shadow-sm text-center mb-5">
            <thead>
 
                <tr>
                    <th>SERIAL</th>
                    <th>MODEL</th>
                    <th>ITEM</th>
                    <th>DAMAGE</th>
                    <th>STATUS</th>
                    <th>DATE_SEND</th>
                    <th>ACTION</th>
                
                </tr>
            </thead>
            <tbody>
        <?php
         $result = $data->display_underprocess($_SESSION['username']);($_SESSION['username']);
        while($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
                <td><?php echo $row['serial']; ?></td>
                <td><?php echo $row['model']; ?></td>
                <td><?php echo $row['gadget']; ?></td>
                <td><?php echo $row['damage']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['date_send']; ?></td>
      
                <td>
                <form action="../item_processor/cancel_item.php" method="POST">
                <input type="hidden" name="serial" value="<?php echo $row['serial'];?>">
                    <button onclick="return confirm('Do you want to Cancel this Item? <?php echo $row['serial'];?>')" class="btn btn-danger " name="cancel"><i class="fa fa-trash border p-2 rounded shadow"></i></button>
                </form>
                
                </td>
            </tr>
        
        <?php endwhile ?>
            </tbody>
        </table>
            </div>  
                </div>
              
            </section>
        </div>
    </div>






<?php include("user-footer.php"); ?>


