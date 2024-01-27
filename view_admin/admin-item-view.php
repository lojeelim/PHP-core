<?php 
//need to fix this the reason is cant delete the specific account ..
session_start();
 include("admin-header.php");
 include("admin-navigator.php");

?>
<div class="row justify-content-center"> 
  <div class="col-md-12 p-5">
    <div>
    <?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}
?>
      <h3 class="text-center my-4">REQUEST ITEM</h3>
    </div>
      <table class="table table-striped responsive-table shadow text-center mb-5">
        <thead>
          <tr class="shadow-sm">
          <th class="bg-primary text-light rounded" scope="col">*</th>
          <th scope="col">ID</th>
          <th scope="col">SERIAL_CODE</th>
          <th scope="col">MODEL</th>
          <th scope="col">GADGET</th>
          <th scope="col">DAMAGE</th>
          <th scope="col">STATUS</th>
       
          <th scope="col">CLIENT</th>

<!-- add talet -->
            <th class="bg-primary rounded text-light" scope="col"><i class="fa fa-wrench border p-2 rounded shadow"></i> </th>
            <th class="bg-danger rounded text-light" scope="col"><i class="fa fa-trash border p-2 rounded shadow"></i></th>
         </tr>
      </thead>
    <tbody>
    <?php      
    $i = 1;
    $result = $data->display_all_pending_item();
     while($row = mysqli_fetch_assoc($result)):
    $_SESSION['serial'] = $row['serial'];
    ?>

    <tr>
       <td class="bg-primary text-white"><?php echo $i; $i++; ?></td>
       <td><?php echo $row['id'];?></td>
       <td><?php echo  $_SESSION['serial'];?></td>
       <td><?php echo $row['model'];?></td>
       <td><?php echo $row['gadget'];?></td>
       <td><?php echo $row['damage'];?></td>
       <td class="text-danger"><?php echo $row['status'];?></td>
       <td><?php echo $row['client'];?></td>

<!-- fix here -->
    <td>
  
    <a href="../view_admin/admin-assign-tech.php?serial=<?php echo $row['serial'];?>" class="btn btn-primary btn-block" >Accept</a>
    
    </td>
    
    
      <td>
        <form action="../item_processor/reject_item.php" method="POST">
        <input type="hidden" name="date" value="<?php echo date('m/d/y/ h:i:s')?>">
        <input type="hidden" name="serial" value="<?php echo $row['serial'];?>">
            <button onclick="return confirm('Do you want to Reject this Item? <?php echo $row['serial'];?>')" class="btn btn-danger btn-block" name="reject">Reject</button>
        </form>
      </td>
    </tr>
  <?php endwhile ?>
    </tbody>
    </table>
    </div>
</div>


<!--row -->

<?php 
// include("warning_delete.php");
include("admin-footer.php");
 ?>
