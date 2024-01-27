<?php 
session_start();
//need to fix this the reason is cant delete the specific account ..
require("../controller/data_controller.php");
 include("admin-header.php");
 include("admin-navigator.php");
$data = new data_controller();
?>
<div class="row justify-content-center "> 

  <div class="col-md-11">
    <div>

      <h3 class="text-center my-4">Registered client List </h3>
    </div>
      <table class="table table-striped responsive-table shadow text-center mb-5">
        <thead>
          <tr class="shadow-sm">
          <th scope="col">ID</th>
            <th scope="col">USERNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">MOBILE_NUMBER</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">HOUSE</th>
<!-- add talet -->
            <th class="bg-primary rounded text-light" scope="col"> <i class="fa fa-eye p-2 border rounded shadow"></i></th>
            <th class="bg-danger rounded text-light" scope="col"> <i class="fa fa-trash p-2 border rounded shadow"></i></th>
         </tr>
      </thead>
    <tbody>
    <?php      
  $result = $data->display_user();
  while($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['u_username'];?></td>
       <td><?php echo $row['u_email'];?></td>
       <td><?php echo $row['u_mobile'];?></td>
       <td><?php echo $row['u_address'];?></td>
        <td><?php echo $row['u_house'];?></td>
        <td><a href="../view_admin/admin-view-client.php?username=<?php echo $row['u_username'];?>" class="btn btn-primary btn-block" >View</a></td>
      <td>
        <form action="../user_processor/user_delete.php" method="POST">
        <input type="hidden" name="username" value="<?php echo $row['u_username'];?>">
            <button onclick="return confirm('Do you want to delete this Account? <?php echo $row['u_username'];?>')" class="btn btn-danger btn-block" name="delete">Delete</button>
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
