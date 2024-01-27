<?php
session_start();
include("user-header.php");
include("user-navigator.php");
include("../view_item/service-index.php");
?>
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-7 col-lg-7">       
            <section class="bg-light shadow" style="height:105vh ; width:50em;">
                <div class="row justify-content-center">
                    
            <div class="col-md-12 col-lg-12 col-sm-12 my-5">
            <h2 class="text-center p-2  ">PAYMENT</h2>

            <table class="table table-striped  responsive-table     text-center" >
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
           
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $username = $_SESSION['username'];
        $result = $data->display_client_done_fix($username);
        while( $row = mysqli_fetch_assoc($result)):
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
            <td>
                <form action="../user_processor/user_paid.php" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">   
                    
                    <button class="btn btn-primary" name="paid" style="width:68px">Pay</button>
                </form>
            </td>
        </tr>        
         <?php endwhile ?>
        </tbody>
</table>  
            </div>  
                </div>
              
            </section>

            <section>
            
            
            
            </section>
        </div>
    </div>

<?php include("user-footer.php"); ?>
