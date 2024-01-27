<div class="modal fade " id="donefix">
    <div class="modal-dialog modal-dialog-centered modal-lg " >
        <div class="modal-content rounded">
            <div class="modal-title  text-center">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm  " >DONE FIX ITEM</h4>  
            </div>
            <div class="modal-body">
        <div class="row justify-content-center">
    <div class="col-md-12  " >
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
        </tr>
    </thead>
    <tbody>
    <?php
        $username = $_SESSION['t_username'];
        $result = $data->display_tech_done_fix($username);
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
            <!-- <td>
                <form action="tech-transaction.php" method="POST">
                    <input type="hidden" name="code" value="<?php echo $row['serial'] ?>">   
                    <button class="btn btn-primary" name="fix">Done Fix</button>
                </form>
            </td> -->
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
            