<?php
 session_start();

 include("user-header.php");
include("user-navigator.php");
include("../view_item/service-index.php");
 include("user-set.php");
   
?>


<div class="row justify-content-center">
    <div class="col-md-7">       
        <section class="bg-light shadow" style="height:105vh ; width:46em;">
                <div class="row justify-content-center">
                    <div class="col-md-12 my-5">
                    <h2 class="text-center p-3 text-primary">ACTIVE ITEM </h2>
                        <table class="table table-striped responsived-table text-center">
                    <thead>
                        <tr>
                            <th>SERIAL</th>
                            <th>ITEM</th>
                            <th>DAMAGE</th>
                            <th>DATE_ACCEPT</th>
                            <th>TECHNICIAN</th>
                            <th>REMARKS</th>
                            <th>PAYMENT</th>
                            
                        </tr>
                    </thead>
                <tbody>
            <?php
             $username = $_SESSION['username'];
             $result = $data->display_all_done_item($username);
            
             while( $row = mysqli_fetch_assoc($result)):
                $_SESSION['serial'] = $row['serial'];
                
            ?>
                <tr>
                <td><?php echo $_SESSION['serial'] ?></td>
                    <td><?php echo $row['gadget'] ?></td>
                    <td><?php echo $row['damage'] ?></td>
                    <td><?php echo $row['date_done'] ?></td>
                    <td>
                    <a class="btn btn-light text-primary" style="width:94px" data-toggle="modal" data-target="#viewtech">
                    
                    <?php $_SESSION['tech'] = $row['technician'];
                        echo $_SESSION['tech'];
                    ?>
                    
                    </a></td>
               
                    <td><?php echo $row['claim'] ?></td>
                    <td><?php echo "₱".$row['price'] ?></td>
                </tr>
            
            <?php endwhile ?>
                    </tbody>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                             <a class="nav-link bg-primary shadow-sm text-light rounded " style="width:94px" data-toggle="modal" data-target="#set">SET <span class="badge badge-danger">
                 <?php 
                   echo $data->client_count_unset_item($_SESSION['username']);
                ?>
                 </span> </a>
                        </td>
                        <td class="">
                                     <h6 class=""> <?php echo "<div class='border border-dark rounded  p-2 '>";
                               echo "TOTAL ";
                               echo "₱".$data->display_sum_all_item($_SESSION['username']);
                               echo "<div>" ;
                               ?></h6>
                            </td>
                           
                        </tr>
                    </table>
                        
                <!-- <div class="col-md-3 border ">
                    <div class="text-right mr-5 text-primary">
                          </div>
                </div> -->

                    </div>
                </div>
        </section>
        
    </div>
   
    
</div>  




<?php 
include("user-pick-tech.php");
include("user-footer.php"); ?>