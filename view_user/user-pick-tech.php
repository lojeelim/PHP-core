<!-- <?php



$result = $data->display_tech_via_username($_SESSION['tech']);
$row = mysqli_fetch_assoc($result);
?>

<div class="modal fade " id="viewtech">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content rounded">
            <div class="modal-title  text-center">
                <h4 class="text-center text-primary  p-4 mb-4 shadow-sm  ">Technician Info</h4>  
            
            </div>
            <div class="modal-body"> 
         
        <div class="row justify-content-center">
        
    <div class="col-11">
<form action="../item_processor/deal_item.php" method="POST">
    

<table class="table table-striped  responsive-table     text-center">
    <thead>
        <tr>
                           
            <td></td>
        </tr>
    </thead>
                <tbody>
            <?php
    
            ?>
                <tr>
                   <td><?php echo $_SESSION['tech']; ?></td>
                </tr>
                <tr>
                   <td><?php echo $row['t_mobile']; ?></td>
                </tr>
            
            <?php  ?>
                    </tbody>
                        
</table>
        </form>
    </div>
</div> row -->
    </div><!--modal-body--> 
        </div><!--modal-content-->
            </div><!--modal-dialog-->
                </div><!--modal fade-->

