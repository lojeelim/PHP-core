
<?php

    // if(isset($_POST['response'])){
    // $serial = $data->escape_string($_POST['serial']);
    // $_SESSION['s'] = $serial;
    
    
    // $result = $data->display_all_item_client($serial    );
    // }
    // $row = mysqli_fetch_assoc($result);
    //     if(isset($_SESSION['serial'])){

        if(isset($_REQUEST['serial'])){
            $serial = $data->escape_string($_REQUEST['serial']);
             $result = $data->display_all_item_client($serial);
             $row = mysqli_fetch_assoc($result);
            }
?>


<div class="modal fade " id="response">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content rounded">
                <div class="modal-title ">
            <h4 class="text-center text-primary  p-4  shadow-sm  ">SEND RESPONSE</h4>  
        </div>  
    <div class="modal-body"> 
    <h4 class="text-center">REQUESTED ITEM</h4>
<table class="table table-striped responsive-table text-center shadow border rounded">
    <thead>
        <tr>
            <th>SERIAL_CODE</th>
            <th>MODEL</th>
            <th>REQUEST_BY</th>
          
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $row['serial']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['client']; ?></td>
        </tr>
    </tbody>
</table>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="form-group">
            <span>Price</span>
                <input class="form-control" placeholder="P" type="number">
            </div>
        </div>   
        <div class="col-md-5">
            <div class="form-group">
            <span>Remark</span>
                <select class="form-control" name="" id="">
                    <option disabled selected value="">Select Remarks</option>
                    <option value="Done">Done</option>
                    <option value="Not Fix"> Can't Fix</option>
                </select>
            </div>
        </div>  

          
        <div class="col-md-10">
            <div class="form-group">
            <span>Discription</span>
               <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Add Discription"></textarea>
            </div>
        </div>      
        
    </div> <!--Row-->
  
    </div><!--modal-body--> 
    <div class="modal-footer ">
        <button class="btn btn-primary w-50 ">Send</button>
    </div>
        </div><!--modal-content-->
            </div><!--modal-dialog-->
                </div><!--modal fade--> 
<!-- close modal -->