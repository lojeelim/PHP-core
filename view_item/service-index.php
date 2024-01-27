<?php
//  require("../controller/data_controller.php");
//  $data = new data_controller();
?>
    
<div class="modal fade " id="service">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content rounded">
            <div class="modal-title ">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm  "> <i class="fa fa-tools"></i>     Repair Service</h4>  
            </div>
            <div class="modal-body"> 
        <div class="row justify-content-center">
    <div class="col-8">
<form action="../item_processor/send_item.php" method="POST">
    <div class="form-group">
        <i class="fa fa-barcode"></i>
            <span>Serial Code</span>
                <input type="text" class="form-control" name="serial">
            <span> Model</span>
        <input type="text" class="form-control" name="model">
    </div>  
<div class="dropdown-divider"></div>
    <select class="custom-select my-3 " name="gadget" id="gadget">
        <option class="" selected disabled value="">Select your gadget</option>
            <option class="" value="Phone">Phone</option>
                <option class="" value="Tablet">Tablet</option>
            <option class="" value="Laptop">Laptop</option>
        <option class="" value="PC">PC's</option>
    </select>
<div class="dropdown-divider"></div>
<select class="custom-select my-3"  name="damage" id="">
    <option selected disabled value="">Select Repair</option>
        <option class="" value="Cracked Screen">Cracked Screen  <small>₱150</small></option>
            <option class="" value="Water Damage">Water Damage <small>₱300</small></option>
                <option class=""  value="Speaker Damage">Speaker Damage <small>₱200</small></option>
                <option class=""  value="No Signal">No Signal <small>₱240</small></option>
            <option class=""  value="Reboot">Reboot <small>₱500</small></option>
            <option class=""  value="Virus">Virus <small>₱330</small></option>
            <option class=""  value="Boot Looping">Boot Looping <small>₱440</small></option>
        </select>
    <div class="dropdown-divider"></div>
<input type="hidden" name="status" value="Pending">
        <input type="hidden" name="technician">
            <input type="hidden" name="client" value="<?php echo $_SESSION['username'];?>">
                <input type="hidden" name="admin">
   
            <div class="form-group">
    <span>Composed</span>
<textarea class="rounded form-control" name="comment" id="" cols="40" rows="2" placeholder="Send Message About This Item"></textarea>
    </div>
        <div class="form-group text-center  ">
            <button class="btn btn-danger" style="width:47%;" data-dismiss="modal"> Cancel</button>
                <button class="btn btn-primary w-50" name="send">Send</button>
            </div>
        </form>
    </div>
</div><!-- row -->
    </div><!--modal-body--> 
        </div><!--modal-content-->
            </div><!--modal-dialog-->
                </div><!--modal fade-->
<!-- close modal -->


<!--         <select class="custom-select my-3"  name="technician" id="">
        <option class="" selected>Select Technician</option>    
        <?php 
            $result = $data->display_tech();
            while($row = mysqli_fetch_assoc($result)): 
      ?>
        
        <option value="<?php echo $row['t_username'];?>"><?php echo $row['t_username']?></option>

        <?php endwhile ?>
         </select>
      
        <div class="dropdown-divider"></div> -->