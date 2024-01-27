<?php session_start();

require("../Sessions/username.php");
include("user-header.php");
include("user-navigator.php");
include("../view_item/service-index.php");
unset($_SESSION['item']);


?>
 
    <div class="row justify-content-center">

        <div class="col-md-6">      

            <section class="bg-light shadow" style="height:105vh; width:40em;">
                <div class="row justify-content-center">

            <div class="col-md-11 py-5">
            <?php 
                if(isset($_SESSION['edit_u'])){
                    echo  $_SESSION['edit_u'];
                }
                
                if(isset($_SESSION['cancel'])){
                    echo  $_SESSION['cancel'];
                   }
            ?>
                <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-3 mb-2 text-center">
                      <h5 class="border border-danger p-4 shadow" style="border-radius:60px;">
                         Reject Item<br><span class="text-primary"><?php echo $data->client_count_reject_item($_SESSION['username'])?></span> </h5>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 mb-2 text-center">
                      <h5 class="border border-warning p-4 shadow" style="border-radius:60px;">
                      Pending Item<br><span class="text-primary"><?php echo $data->client_count_pending_item($_SESSION['username'])?></span> </h5>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 mb-2 text-center">
                      <h5 class="border border-primary p-4 shadow" style="border-radius:60px;"
                      >Total Item<br><span class="text-primary"><?php echo $data->client_count_item($_SESSION['username'])?></span></h5>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 mb-2 text-center">
                      <h5 class="border border-success p-4 shadow" style="border-radius:60px;">
                      Active Item<br><span class="text-primary"><?php echo $data->client_count_done_item($_SESSION['username'])?></span></h5>
                      </div>
                </div>
            <hr>

                
        
            <div class="row justify-content-center mb-5 ">

                <div class="col-9 my-3">
                <span>Total Pending Item</span>
                    <div class="progress progress-sm ">
                        <div class="progress-bar bg-warning" role="progressbar" style="width:<?php echo $data->client_count_pending_item($_SESSION['username'])?>em" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                </div>
                <div class="col-9 my-3">
                <span>Total Request Item</span>
                    <div class="progress progress-sm ">
                        
                        <div class="progress-bar bg-primary" role="progressbar" style="width:<?php echo $data->client_count_item($_SESSION['username'])?>em" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                </div>
                <div class="col-9 my-3">
                <span>Total Accepted Item</span>
                    <div class="progress progress-sm ">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $data->client_count_done_item($_SESSION['username']) ?>em " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                </div>  
                <div class="col-9 my-3">
                <span>Total Reject Item</span>
                    <div class="progress progress-sm ">
                        <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo $data->client_count_reject_item($_SESSION['username'])?>em" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                    <table class="table table-striped responsive-table my-3">
                    <thead>
                        <tr>
                            <th>SERIAL</th>
                            <th>MODEL</th>
                            <th>ITEM</th>
                            <th>STATUS</th>
                            <th class="bg-danger rounded text-ligh "></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $result = $data->display_all_reject_item($_SESSION['username']);
                        while($row = mysqli_fetch_assoc($result)):
                    ?>
                        <tr>
                            <td><?php echo $row['serial']; ?></td>
                            <td><?php echo $row['model']; ?></td>
                            <td><?php echo $row['gadget']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                            <form action="../item_processor/cancel_item.php" method="POST">
                            <input type="hidden" name="serial" value="<?php echo $row['serial'];?>">
                                <button  class="btn btn-danger btn-block" name="cancel"><i class="fa fa-trash  fa-lg  rounded shadow"></i></button>
                            </form>
                        
                            </td>
                        </tr>
                    <?php endwhile ?>
                    </tbody>
                    
                    </table>
                </div>  

    
    


                
             </div>  
                </div>
            </section>
        </div>
    </div>



<?php include("user-footer.php"); ?>

