
<div class="modal fade " id="accepted">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded">
            <div class="modal-title  text-center">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm  ">ACCEPTED ITEM LIST</h4>  
            
            </div>
            <div class="modal-body"> 
         
        <div class="row justify-content-center">
        
    <div class="col-11">
<form action="../item_processor/deal_item.php" method="POST">
<table class="table table-striped  responsive-table  text-center">
                    <thead>
                        <tr>
                            <th>SERIAL</th>
                            <th>ITEM</th>
                            <th>DAMAGE</th>
                            <th>PAYMENT</th>
                            <th>STATUS</th>
                            <th>REMARKS</th>
                        </tr>
                    </thead>
                <tbody>
            <?php
           
             $result = $data->display_tech_accepted_item($_SESSION['t_username']);
            
             while( $row = mysqli_fetch_assoc($result)):
            ?>
                <tr>
                    <td><?php echo $row['serial'] ?></td>   
                    <td><?php echo $row['gadget'] ?></td>
                    <td><?php echo $row['damage'] ?></td>
                    <td><?php echo"₱".$row['price'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['claim'] ?></td>
                </tr>
            
            <?php endwhile ?>
                    </tbody>
                        
                    </table>
        </form>
    </div>
</div><!-- row -->
    </div><!--modal-body--> 
        </div><!--modal-content-->
            </div><!--modal-dialog-->
                </div><!--modal fade-->
<!-- close modal -->
