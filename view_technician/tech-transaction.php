<?php 
include("tech-header.php");
include("tech-navigator.php");

if(isset($_POST['fix'])){
    $serial = $data->escape_string($_POST['code']);
    $result = $data->display_all_item_client($serial);
    $row = mysqli_fetch_assoc($result);

}
?>
<form action="../tech_processor/tech_transaction.php" method="POST">
<div class="row justify-content-center" >
    <div class="col-md-9">
    <h2 class="text-primary text-center p-3">DONE FIX</h2>
    <table class="table table-striped responsive-table text-center shadow border rounded">
    <thead>
        <tr>
            <th>SERIAL_CODE</th>
            <th>MODEL</th>
            <th>ITEM</th>
            <th>PRICE</th>
            <th>CLIENT</th>
            <th>REMARKS</th>
        </tr>
    </thead>
    <tbody>
    <?php ?>

        <tr>
         <td><?php echo $row['serial'] ?></td>
         <td><?php echo $row['model'] ?></td>
         <td><?php echo $row['gadget'] ?></td>
         <td><?php echo $row['price'] ?></td>
         <td><?php echo $row['client'] ?></td>
         <td><?php echo $row['claim'] ?></td>
        </tr>
    <?php ?>
    </tbody>
</table>
<div class="row justify-content-center  my-5">
<div class="col-md-2">
        <div class="form-group ">
            <span>Sevice Fee</span>
            <input type="number" name="service" class="form-control" placeholder="₱">
        </div>
    </div>

    <div class="col-md-7">
        <div class="form-group ">
            <span class="">Item Damage Analysis</span>
           <textarea name="description" id="" cols="30" rows="7" placeholder="Compose.." class="form-control"></textarea>
           <div class="text-right my-3">
           <input type="hidden" name="serial"     value="<?php echo $row['serial']?>" ?>"
           <input type="hidden" name="item"       value="<?php echo $row['model']." ".$row['gadget'] ?>">
           <input type="hidden" name="client"     value="<?php echo $row['client'] ?>">
           <input type="hidden" name="technician" value="<?php echo $row['technician'] ?>">
           <input type="hidden" name="admin"      value="<?php echo $row['admin'] ?>">
           <input type="hidden" name="price"      value="<?php echo $row['price'] ?>">
           <input type="hidden" name="status"     value="Done fix">
           <button class="btn btn-primary w-50" name="done">Send</button>
          
           </div>
           
        </div>
    </div>
    </div>


    </div>
</div>
    
</form>


<?php 
include("tech-footer.php");
?>