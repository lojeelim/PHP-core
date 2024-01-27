<?php 
require("../controller/data_controller.php");
include("tech-header.php");
$data = new data_controller();

if(isset($_REQUEST['serial'])){
$serial = $data->escape_string($_REQUEST['serial']);
 $result = $data->display_all_item_tech($serial);
 $row = mysqli_fetch_assoc($result);
 $_SESSION['serial'] = $row['serial'];
}

?>
<form class="my-5" action="../item_processor/done_item.php" method="POST">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 col-sm-10">
        <table class="table table-striped responsive-table text-center shadow border rounded">
        <thead>
            <tr>
                <th>SERIAL_CODE</th>
                <th>MODEL</th>
                <th>DAMAGE</th>
                <th>PRICE   </th>
                <th>REQUEST_BY</th>
                <th>APPROVED_BY</th>
             
            </tr>
        </thead>
        <tbody> 
            <tr>
            <td><?php echo $_SESSION['serial']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['damage']; ?></td>
            <td><?php echo "₱".$row['price']; ?></td>
            <td><?php echo $row['client']; ?></td>
            <td><?php echo $row['admin']; ?></td>
         
           
        </tr>
        </tbody>
        </table>
        <div class="shadow p-2">
            <p><h5 class="text-primary">Message</h5><?php echo $row['comment']; ?></p>
        </div>
<section class="bg-light my-5 shadow">
<div class="row justify-content-center ">


        <input class="form-control"  name="doned" type="hidden" value="<?php echo date('y-m-d h:i:s') ?> " >     

        <div class="my-4 col-md-3 col-lg-3 col-sm-3">
        <div class="form-group">
            <span>Remarks</span>
                <select class="form-control" name="status" id="">
                    <option selected value="Accepted">Accepted</option>
                    <option value="Refused">Refused</option>
                </select>
            </div>
        </div> 

        <div class="col-md-7 col-lg-7 col-sm-8">
            <div class="form-group">
                <span>Compose</span>
               <textarea class="form-control" name="comment" id="" cols="30" rows="5" placeholder="Say Something to <?php echo $row['client']; ?>"></textarea>
            </div>      
            <div class="my-4  text-center">
                    <input type="hidden" name="serial" value="<?php echo $_SESSION['serial'] ?>">
                <a class="btn btn-danger" style="width:40%;" href="tech-index.php">Cancel</a>
                <button class="btn btn-primary" style="width:40%;" name="done">Send</button>
            </div>
        </div>   
    </div><!--row-->
</form> 

</section>

</div>
</div>

<?php 
include("tech-footer.php");
?>


