<?php 


require("../controller/data_controller.php");

include("tech-header.php");

include("tech-navigator.php");
$data = new data_controller();
$_SESSION['t_username'];


?>

<div class="row justify-content-center">
  <div class="col-md-3 col-sm-3 mb-3">
     <div class="list-group p-1 shadow-lg shadow rounded">

  
     
        <h3 class="my-2 p-3  text-center">Records</h3>
            <div class="text-center p-2">
            <a class="btn btn-primary btn-block text-light " data-toggle="modal" data-target="#accepted">
            Accepted Item
            <span class="badge badge-danger"><?php echo $data->count_accept_item($_SESSION['t_username']) ?></span>
            </a>
            <a class="btn btn-primary btn-block text-light   " data-toggle="modal" data-target="#pickup">
           For Pick Up Item <span class="badge badge-danger"><?php echo $data->count_pickup_item($_SESSION['t_username']); ?></span>
            </a>
            <a class="btn btn-primary btn-block text-light   " data-toggle="modal" data-target="#deliver">
           For Deliver Item <span class="badge badge-danger"><?php echo $data->count_deliver_item($_SESSION['t_username']); ?></span>
            </a>
            <a class="btn btn-info btn-block text-light p-3" data-toggle="modal" data-target="#donefix">
            Done Item <span class="badge badge-danger"><?php echo $data->count_tech_done_fix($_SESSION['t_username']); ?></span>
            </a>
              
            </div>
            
        </div>  
        <div class="border text-center my-4 p-5 shadow-lg" style="border-radius:24px"><span>Total Earnings</span>
        <h2>
        <?php echo"₱".$data->total_technician_earn($_SESSION['t_username']) ?>
        </h2>
        </div>
    </div>

    <div class="col-lg-8 col-md-8   col-sm-8">
    <?php  
  
    if(isset($_SESSION['done'])){
     echo $_SESSION['done'];
    }
    ?>
      <h2 class="text-primary text-center p-3">REQUEST  ITEM</h2>
        <table class="table table-striped responsive-table shadow-lg text-center mb-5">
            <thead>
                <tr>
                <td>#</td>
                <th scope="col">SERIAL</th>
                <th scope="col">MODEL</th>
                <th scope="col">RESQUEST_ITEM</th>
                <th scope="col">TYPE_OF_DAMAGE</th>
                <td class="bg-primary"><i class="fa fa-check text-light p-2 border rounded shadow"></i></td>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i = 1;
                $result = $data->display_tech_assign_item( $_SESSION['t_username']);
                while($row = mysqli_fetch_assoc($result)):

                      $_SESSION['serial'] = $row['serial'];
             ?>
                <tr>
                  <td><?php  echo $i; $i++;?></td>
                  <td><?php  echo $row['serial']?></td>
                  <td><?php  echo $row['model']; ?></td>
                  <td><?php  echo $row['gadget']; ?></td>
                  <td><?php  echo $row['damage']; ?></td>
                  <td>
                    <a href="tech-done-item.php?serial=<?php echo $row['serial'];?>" class="btn btn-primary btn-block" >ACCEPT JOB</a>
                  </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>  
</div>

<?php 
include("tech-donefix.php"); 
include("tech-accept-item.php"); 
include("tech-view-pickup.php");  
include("tech-view-deliver.php");  
include("tech-response.php"); 
include("tech-footer.php"); 
?>