
<div class="modal fade " id="set">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded">
            <div class="modal-title  text-center">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm  ">SET ACTIVE ITEM</h4>  
            
            </div>
            <div class="modal-body"> 
         
        <div class="row justify-content-center">
        
    <div class="col-11">
<form action="../item_processor/deal_item.php" method="POST">
<table class="table table-striped  responsive-table     text-center">
                    <thead>
                        <tr>
                            <th>SERIAL</th>
                            <th>ITEM</th>
                            <th>DAMAGE</th>
                            <th>PAYMENT</th>
                            <th></th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                <tbody>
            <?php
             $username = $_SESSION['username'];
             $result = $data->display_client_unset_item($username);
            
             while( $row = mysqli_fetch_assoc($result)):
            ?>
                <tr>
                    <td><?php echo $row['serial'] ?></td>   
                    <td><?php echo $row['gadget'] ?></td>
                    <td><?php echo $row['damage'] ?></td>
                    <td><?php echo"₱".$row['price'] ?></td>
                    <td>
                        <select class="form-control" name="remarks" id="">
                        <option class="" selected  disabled><Section>Select</option>
                        <option value="Deliver">Deliver</option>
                        <option value="Pick Up">Pick Up</option>
                        </select>
                    </td>
                    <td>   
                            <input type="hidden" name="serial" value="<?php echo $row['serial'] ?>">
                            <button class="btn btn-primary" name="deal">SET NOW</button>
                       
                    </td>
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
