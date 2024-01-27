<?php 
session_start();
//need to fix this the reason is cant delete the specific account ..
// require("../controller/data_controller.php");
 include("admin-header.php");
 include("admin-navigator.php");
// $data = new data_controller();
?>
<div class="row justify-content-center "> 
  <div class="col-md-11">
    <div>
    <?php if(isset($_SESSION['a_delete'])){
       echo $_SESSION['a_delete'];
    }
    if(isset($_SESSION['edit_a'])){
      echo $_SESSION['edit_a'];
   }

   ?>
    <a class="btn btn-primary  p-2" href="admin-register.php"> <i class="fa fa-plus fa-lg"> </i></a>
      <span class="text-primary ">Add Admin</span>
      <h3 class="text-center my-2">Admin List</h3>
   
    </div>
      <table class="table table-striped responsive-table shadow text-center mb-5">
        <thead>
          <tr class="shadow-sm">
          <th scope="col">ID</th>
            <th scope="col">USERNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">MOBILE_NUMBER</th>
  
<!-- add talet -->
            <th class="bg-primary rounded text-light" scope="col"> <i class="fa fa-pen p-2 border rounded shadow"></i></th>
            <th class="bg-danger rounded text-light" scope="col"> <i class="fa fa-trash p-2 border rounded shadow"></i></th>
         </tr>
      </thead>
    <tbody>
    <?php      
  $result = $data->display_admin();
  while($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['a_username'];?></td>
       <td><?php echo $row['a_email'];?></td>
       <td><?php echo $row['a_mobile'];?></td>
        <td><a href="../view_admin/admin-edit-admin.php?username=<?php echo $row['a_username'];?>" class="btn btn-primary btn-block" >Edit</a></td>
      <td>
        <form action="../admin_processor/admin-delete.php" method="POST">
        <input type="hidden" name="username" value="<?php echo $row['a_username'];?>">
            <button onclick="return confirm('Do you want to delete this Account? <?php echo $row['a_username'];?>')" class="btn btn-danger btn-block" name="delete">Delete</button>
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
