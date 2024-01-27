<?php session_start();
require("../Sessions/username.php");
include("user-header.php");
include("user-navigator.php");
include("../view_item/service-index.php");
unset( $_SESSION['edit_u']);
$data = new data_controller();
    if(isset($_REQUEST['edit'])){

      $serial = $data->escape_string($_REQUEST['serial']);
      $result = $data->display_all_item_client($serial);
      $row = mysqli_fetch_assoc($result);
    }


?>
<div class="row justify-content-center">
    <div class="col-md-6">      
        <section class="bg-light shadow" style=" width:40em;">
        <div class="row justify-content-center">
    <div class="col-6 my-5">
        
    <h2 class="text-center p-3">Edit Request Item</h2>
<form action="..\item_processor\edit-item.php" method="POST">
    <div class="form-group">
        <i class="fa fa-barcode"></i>
            
                <input type="hidden" class="form-control" name="serial"  value="<?php echo $row['serial'];?>">
            <span> Model</span>
        <input type="text" class="form-control" name="model" value="<?php echo  $row['model'] ?>">
    </div>  
<div class="dropdown-divider"></div>
<span>Type Of gadget</span>
    <!-- <select class="custom-select my-3 " name="gadget" id="gadget">
        <option class="" selected disabled value="<?php echo $row['gadget']?>"><?php echo $row['gadget']?></option>
            <option class="" value="Phone">Phone</option>
                <option class="" value="Tablet">Tablet</option>
            <option class="" value="Laptop">Laptop</option>
        <option class="" value="PC">PC's</option>
    </select> -->
    <input type="text" class="form-control" name="gadget" value="<?php echo  $row['gadget'] ?>">
  
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
        <!-- <span>Damage</span>
        <input type="text" class="form-control" name="damage" value="<?php echo  $row['damage'] ?>">
   -->
    <div class="dropdown-divider"></div>
        <div class="form-group">
    <span>Rewrite Message</span>
<!-- <textarea class="rounded form-control" name="disc" id="" cols="40" rows="1" placeholder="<?php echo $row['comment'] ?>"></textarea> -->
<input type="text" class="form-control" name="disc" value="<?php echo  $row['comment'] ?>">
  
    </div>
        <div class="form-group text-center  ">
            <a href="user-item-list.php" class="btn btn-danger" style="width:48%;"> Cancel</a>
              
           
            <button class="btn btn-primary w-50" name="edit">Edit</button>
        
        </div>
        </form>

        </section>
    </div>
</div>




 
<?php include("user-footer.php"); ?>    