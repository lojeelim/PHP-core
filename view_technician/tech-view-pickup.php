<div class="modal fade " id="pickup">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded">
            <div class="modal-title  text-center">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm  ">PICK UP ITEM</h4>  
            </div>
            <div class="modal-body">
        <div class="row justify-content-center">
    <div class="col-11">
<table class="table table-striped  responsive-table     text-center">
    <thead>
        <tr>                 
            <th>SERIAL</th>
            <th>MODEL</th>
            <th>ITEM</th>
            <th>DAMAGE</th>
            <th>PAYMENT</th>
            <th>REMARKS</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $username = $_SESSION['t_username'];
        $result = $data->display_all_pickup_item($username); 
        while( $row = mysqli_fetch_assoc($result)):
    ?>
        <tr>
            <td><?php echo $row['serial'] ?></td>
            <td><?php echo $row['model'] ?></td>      
            <td><?php echo $row['gadget'] ?></td>
            <td><?php echo $row['damage'] ?></td>
            <td><?php echo"₱".$row['price'] ?></td>
            <td><?php echo $row['claim'] ?></td>
            <td>
                <form action="tech-transaction.php" method="POST">
                    <input type="hidden" name="code" value="<?php echo $row['serial'] ?>">   
                    <button class="btn btn-primary" name="fix">Done Fix</button>
                </form>
            </td>
        </tr>        
         <?php endwhile ?>
        </tbody>
</table>  
    </div><!--col-->
        </div><!-- row -->
            </div><!--modal-body--> 
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div><!--modal fade-->
<!-- close modal -->
