<?php 
require("../database/DB.php");

class data_model {
//user tech and admin class variable
private $db;
public $id;
public $lname;
public $fname;
public $m;
public $username;//user , tech ,admin  = identity
public $email;
public $mobile;
public $address;
public $house;
public $password;
//records class variable
public $serial;//item
public $model;
public $gadget;
public $damage;
public $status;
public $client;
public $admin;
public $technician;
public $price;
public $comment;
//public $date_send;
public $date_done;
//message variable
public $message;
//trasaction variable
public $service;
//table class variable
public $transaction_tbl = "transaction";
public $message_tbl = "message";
public $client_tbl = "client";
public $technician_tbl ="technician";
public $admin_tbl = "admin";
public $records_tbl ="records";

    public function __construct(){
      $this->db = new database();
    }

//-------------START ADMIN MODEL------------//
    //insert
    public function insert_admin(){
        $sql = "INSERT INTO $this->admin_tbl ( a_username ,  a_email ,  a_mobile , a_password )
                VALUES ('$this->username' , '$this->email' , '$this->mobile' , '$this->password')";
               return $this->db->execute($sql);
    }
    //retrieve
    public function GET_admin(){
        $sql = "SELECT * FROM $this->admin_tbl";
        return $this->db->execute($sql); 
    }

    public function GET_admin_via_username($username){
        $sql = "SELECT * FROM $this->admin_tbl WHERE a_username = '$username'";
        return $this->db->execute($sql); 
    }


    //update
    public function update_admin($username,$email,$mobile){
        $sql ="UPDATE $this->admin_tbl SET a_email ='$email' , a_mobile ='$mobile' WHERE a_username ='$username'";
        return $this->db->execute($sql);
    }

 //need all data  will exist to the database
    public function admin_assign_tech($serial,$technician,$admin){
        $sql ="UPDATE $this->records_tbl SET technician ='$technician' , admin = '$admin' WHERE serial ='$serial'";
        return $this->db->execute($sql);
    }

    //delete admin A must be capital
    //delete 
    public function delete_Admin($username){
        $sql ="DELETE FROM $this->admin_tbl WHERE a_username = '$username'";
        $this->db->execute($sql);
    }
    //checking

    public function GET_exist_admin($username){
        $sql ="SELECT * FROM $this->admin_tbl WHERE a_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        return $row = mysqli_fetch_assoc($result) > 0;
    }

    //checking
    public function GET_password_admin($username){  
        $sql ="SELECT a_password FROM $this->admin_tbl WHERE a_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        return $row['a_password'];
    }
    

    //login
    public function check_login_admin($username, $password){
        $sql ="SELECT a_username  , a_password FROM $this->admin_tbl WHERE a_username ='$username' "; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);
        return $row;
    }

    
// can be add count functions 

//-------------END ADMIN MODEL--------------//

            //Go lojee :>

//-------------START USER'S MODEL------------//
    public function insert_user(){
        $sql = "INSERT INTO $this->client_tbl (u_lname ,u_fname ,u_m , u_username ,  u_email ,  u_mobile ,  u_address ,  u_house , u_password )
                VALUES ('$this->lname','$this->fname','$this->m','$this->username','$this->email','$this->mobile','$this->address','$this->house','$this->password')";
               return $this->db->execute($sql);
    }  
    //need to add data
    public function update_user($username,$lname ,$fname ,$m ,$email ,$mobile ,$address ,$house){
        $sql ="UPDATE $this->client_tbl SET u_lname = '$lname' , u_fname = '$fname' , u_m = '$m' , u_email ='$email' , u_mobile = '$mobile', u_address= '$address', u_house ='$house'
        WHERE u_username ='$username'";
        return $this->db->execute($sql);
    }

    public function update_user_password($username,$password){
        $sql ="UPDATE $this->client_tbl SET u_password = '$password' WHERE u_username ='$username'";
        return $this->db->execute($sql);
    }

    public function GET_user(){
        $sql = "SELECT * FROM $this->client_tbl";
        return $this->db->execute($sql); 
    }
    //noted delete_User "U" must caputal 
    public function delete_User($username){
        $sql ="DELETE FROM $this->client_tbl WHERE u_username = '$username'";
        $this->db->execute($sql);
    }

    public function GET_user_via_username($username){
        $sql = "SELECT * FROM $this->client_tbl WHERE u_username = '$username'";
        return $this->db->execute($sql); 
    }
    
    public function check_login_user($username, $password){
        $sql ="SELECT u_username  , u_password FROM $this->client_tbl WHERE u_username ='$username' "; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);
        return $row;
    }
        
    public function GET_password_user($username){  
        $sql ="SELECT u_password FROM $this->client_tbl WHERE u_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        return $row['u_password'];
    }

    public function GET_username_user(){  
        $sql ="SELECT u_username FROM $this->client_tbl WHERE u_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        return $row['u_username'];
    }
    
    public function GET_exist_user($username){
        $sql ="SELECT * FROM $this->client_tbl WHERE u_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        return $row = mysqli_fetch_assoc($result) > 0;
    }

    public function GET_user_process_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE  client = '$username' and status= 'Under Process'";
        return $this->db->execute($sql); 
    }

    public function count_user(){
        $sql = " SELECT COUNT(id) as total FROM $this->client_tbl ";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

  

    //need write to controller

//----------END USER'S MODEL--------------//

            //hapit naka 

//----------START TECHNICIAN'S MODEL----------//
    public function insert_technician(){
        $sql = "INSERT INTO $this->technician_tbl (t_lname ,t_fname ,t_m , t_username ,  t_email ,  t_mobile ,  t_address  , t_password )
                VALUES ('$this->lname','$this->fname','$this->m','$this->username','$this->email','$this->mobile','$this->address','$this->password')";
                $this->db->execute($sql);
    }

  

    public function GET_technician(){
        $sql = "SELECT * FROM $this->technician_tbl";
        return $this->db->execute($sql); 
    }

    public function GET_technician_via_username($username){
        $sql = "SELECT * FROM $this->technician_tbl WHERE t_username = '$username'";
        return $this->db->execute($sql); 
    }

   
    public function check_login_technician($username, $password){
        $sql ="SELECT t_username  , t_password FROM $this->technician_tbl WHERE t_username ='$username' "; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function GET_password_technician($username){  
        $sql ="SELECT t_password FROM $this->technician_tbl WHERE t_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        return $row['t_password'];
    }

    public function GET_exist_tech($username){
        $sql ="SELECT * FROM $this->technician_tbl WHERE t_username ='$username'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        return $row = mysqli_fetch_assoc($result) > 0;
    }



    public function delete_technician($username){
        $sql ="DELETE FROM $this->technician_tbl WHERE t_username = '$username'";
        $this->db->execute($sql);
    }

    public function count_technician(){
        $sql = "SELECT COUNT(id) as total FROM $this->technician_tbl";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }
//-------------END USER'S MODEL--------------//

            //taranguon ang DB need FK

//-------------START ITEM MODEL--------------//
    public function insert_item(){
        $sql = " INSERT INTO $this->records_tbl (serial, model, gadget, damage, status , client, comment) 
        VALUES ('$this->serial','$this->model','$this->gadget','$this->damage','$this->status','$this->client','$this->comment')";
        $this->db->execute($sql);
    }

    public function GET_all_item(){
        $sql = "SELECT * FROM $this->records_tbl";
        return $this->db->execute($sql);
    }
//all client sent item
    public function GET_all_item_client($serial){
        $sql = "SELECT * FROM $this->records_tbl WHERE serial ='$serial' ";
        return $this->db->execute($sql);
    }

    // item that assign to tech
    public function GET_all_item_tech($serial){
        $sql = "SELECT * FROM $this->records_tbl WHERE serial ='$serial' and  status ='Under Process'";
        return $this->db->execute($sql);
    }   

    public function GET_all_pending_item(){
        $sql = "SELECT * FROM $this->records_tbl WHERE status ='pending'";
        return $this->db->execute($sql); 
    }

    public function GET_all_done_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE client ='$username' and status ='Accepted'";
        return $this->db->execute($sql); 
    }


    public function GET_client_unset_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE client ='$username' AND claim ='Unset' AND status ='Accepted' ";
        return $this->db->execute($sql); 
    }

    public function GET_technician_accepted_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE technician ='$username' AND status ='Accepted' ";
        return $this->db->execute($sql); 
    }

    // public function GET_all_unset_item(){
    //     $sql = "SELECT * FROM $this->records_tbl WHERE  claim ='Unset' AND status ='Accepted' ";
    //     return $this->db->execute($sql); 
    // }

    // public function GET_comment($username){
    //     $sql = "SELECT comment FROM $this->records_tbl WHERE  client ='$username'";

    // }

    public function GET_all_reject_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE client ='$username' and status ='reject'";
        return $this->db->execute($sql); 
    }

    public function GET_all_sum_done_item($username){
        $sql = "SELECT sum(price) as total  FROM $this->records_tbl WHERE client ='$username' and status = 'Accepted' ";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function GET_exist_item($serial){
        $sql ="SELECT * FROM $this->client_tbl WHERE serial ='$serial'"; 
        $result = $this->db->execute($sql);  
        $resultCheck = mysqli_num_rows($result);
        return $row = mysqli_fetch_assoc($result) > 0;
    }

    public function GET_client_send_gadget($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE  client = '$username' and status='pending'";
        return $this->db->execute($sql); 
    }

    public function GET_technician_assign_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE  technician = '$username' and status= 'Under Process'";
        return $this->db->execute($sql); 
    }

    public function GET_all_pickup_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE  technician = '$username' and claim = 'Pick Up'";
        return $this->db->execute($sql); 
    }

    public function GET_all_deliver_item($username){
        $sql = "SELECT * FROM $this->records_tbl WHERE  technician = '$username' and claim = 'Deliver'";
        return $this->db->execute($sql); 
    }


    public function update_item_status($serial,$status){
        $sql ="UPDATE $this->records_tbl SET status = '$status' WHERE serial ='$serial'";
        return $this->db->execute($sql);
    }

    public function update_item_deal($serial,$remarks){
        $sql ="UPDATE $this->records_tbl SET claim = '$remarks' WHERE serial ='$serial'";
        return $this->db->execute($sql);
    }

    public function update_item_done($serial,$status,$done,$comment){
        $sql ="UPDATE $this->records_tbl SET status = '$status' , date_done = '$done' , comment = '$comment' WHERE serial ='$serial'";
        return $this->db->execute($sql);
    }

    public function update_item($serial , $model , $gadget , $damage , $disc){
        $sql ="UPDATE $this->records_tbl SET serial ='$serial' , model = '$model' , gadget = '$gadget' , damage ='$damage', comment ='$disc' WHERE serial ='$serial'";
        return $this->db->execute($sql);
    }
    //count
    public function count_pickup_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE  claim ='Pick Up' AND technician = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_deliver_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE  claim ='Deliver' AND technician = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }


    public function count_client_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE client = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_client_pending_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE status ='pending' and client = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_client_done_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE status ='Accepted' and client = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_client_reject_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE status ='Reject' and client = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_client_unset_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl WHERE claim ='Unset' and status ='Accepted' and client = '$username'";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_all_accept_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl  WHERE status ='Accepted' AND technician = '$username' ";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }
    public function count_client_underprocess_item($username){
        $sql = "SELECT COUNT(serial) as total FROM $this->records_tbl  WHERE status ='Under Process' AND client = '$username' ";
        $result = $this->db->execute($sql); 
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }




    public function delete_item($serial){
        $sql = "DELETE FROM $this->records_tbl WHERE serial = '$serial'";
        $this->db->execute($sql);

    }
//-------------END ITEM MODEL--------------//

//-------------MESSAGE MODEL----------------//

    public function insert_message(){
        $sql = "INSERT INTO $this->message_tbl( client,item ,message ) VALUES ('$this->username','$this->serial','$this->message')";
        return  $this->db->execute($sql);
    }

    public function delete_message($data){
        $sql = "DELETE FROM $this->message_tbl WHERE item = '$data'";
        return  $this->db->execute($sql);
    }

    public function update_message($id,$message){
        $sql = "UPDATE  $this->message_tbl SET message = '$message' WHERE id = '$id' ";
        return  $this->db->execute($sql);
    }

    public function update_message_status($serial,$status,$a_username,$t_username){
        $sql = "UPDATE  $this->message_tbl SET status = '$status' , admin = '$a_username', technician ='$t_username' WHERE item = '$serial' ";
        return  $this->db->execute($sql);
    }

    public function GET_client_message($sername){
        $sql = "SELECT message FROM  $this->message_tbl WHERE client = '$username'";
        return  $this->db->execute($sql);
    }

    public function GET_technician_message($sername){
        $sql = "SELECT message FROM  $this->message_tbl WHERE technician = '$username'";
        return  $this->db->execute($sql);
    }

    public function GET_admin_message($sername){
        $sql = "SELECT message FROM  $this->message_tbl WHERE admin = '$username'";
        return  $this->db->execute($sql);
    }

    public function GET_message_for_admin(){
        $sql = "SELECT * FROM  $this->message_tbl WHERE status ='1'";
        return  $this->db->execute($sql);
    }

    public function GET_message_for_technician($username){
        $sql = "SELECT * FROM  $this->message_tbl WHERE status ='0' and technician ='$username'";
        return  $this->db->execute($sql);
    }


    public function count_admin_message(){
        $sql = "SELECT COUNT(id) as total FROM $this->message_tbl WHERE status = '1'";
        $result =  $this->db->execute($sql);
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

    public function count_tech_message($username){
        $sql = "SELECT COUNT(id) as total FROM $this->message_tbl WHERE status = '0' AND technician = '$username'";
        $result =  $this->db->execute($sql);
        $row = mysqli_fetch_array($result);
        return $row['total'];
    }

 //---END MESSAGE----//



//TRANSACTION
public function insert_transaction(){
    $sql = " INSERT INTO $this->transaction_tbl (client, technician, admin, price , service , serial , item ,  status) 
    VALUES ('$this->client','$this->technician','$this->admin','$this->price','$this->service','$this->serial','$this->gadget','$this->status')";
    $this->db->execute($sql);
}


//stored proccedure
public function get_transaction(){
    $sql= "CALL `display_transaction`(@p0)";
    $result = $this->db->execute($sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

public function count_transaction(){
    $sql= "CALL `count_transaction`(@p0);";
    $result = $this->db->execute($sql);
    $row = mysqli_fetch_array($result);
    return $row;
}
public function client_payment($username){
    $sql = "SELECT sum(price +service ) as total  FROM $this->transaction_tbl WHERE client = '$username' and remarks = 'Paid' ";
    $result = $this->db->execute($sql); 
    $row = mysqli_fetch_array($result);
    return $row['total'];
}


public function admin_earn(){
    $sql = "SELECT sum(price) as total  FROM $this->transaction_tbl";
    $result = $this->db->execute($sql); 
    $row = mysqli_fetch_array($result);
    return $row['total'];
}

public function technician_earn($username){
    $sql = "SELECT sum(service) as total  FROM $this->transaction_tbl WHERE technician = '$username' AND remarks ='Paid' ";
    $result = $this->db->execute($sql); 
    $row = mysqli_fetch_array($result);
    return $row['total'];
}

public function GET_donefix($username){
    $sql= "SELECT * FROM $this->transaction_tbl WHERE client ='$username' ";
    $result = $this->db->execute($sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

public function GET_client_donefix($username){
    $sql= "SELECT * FROM $this->transaction_tbl WHERE client ='$username' AND remarks = 'Unpaid' ";
    return $this->db->execute($sql);
}

// public function GET_id_donefix($id){
//     $sql= "SELECT * FROM $this->transaction_tbl WHERE id ='$id'  ";
//     return $this->db->execute($sql);
// }

public function GET_tech_donefix($username){
    $sql= "SELECT * FROM $this->transaction_tbl WHERE technician ='$username'  ";
    return $this->db->execute($sql);
}


public function GET_client_done_transac($username){
    $sql= "SELECT * FROM $this->transaction_tbl WHERE client ='$username' and remarks ='Paid' ";
    return $this->db->execute($sql);
}


public function count_client_donefix($username){
    $sql= "SELECT COUNT(id) as total FROM $this->transaction_tbl WHERE client ='$username' AND remarks = 'Unpaid'  ";
    $result = $this->db->execute($sql);
    $row = mysqli_fetch_array($result);
    return $row['total'];
}



public function count_all_done_done_transac($username){
    $sql= "SELECT COUNT(id) as total FROM $this->transaction_tbl WHERE client ='$username' AND remarks = 'Paid'  ";
    $result = $this->db->execute($sql);
    $row = mysqli_fetch_array($result);
    return $row['total'];
}




public function count_tech_donefix(){
    $sql= "SELECT COUNT(id) as total FROM $this->transaction_tbl WHERE remarks = 'Paid' or remarks ='Unpaid' ";
    $result = $this->db->execute($sql);
    $row = mysqli_fetch_array($result);
    return $row['total'];
}

public function update_transaction_remarks($id , $remarks){
    $sql ="UPDATE $this->transaction_tbl SET remarks = '$remarks' WHERE id = '$id' ";
    return $this->db->execute($sql);
}




//END TRANSACTION


//HELPER
    public function real_escape_string($value){
        return $this->db->mysqli_real_escape_string($value);
      }

    public function __destruct(){
        unset($this->db);      
    }


}//end of class


// $data= new data_model();

// $r = $data->GET_tech_donefix("123");

// var_dump($r);

//  $data = new data_model();
// $username = $data->username = "lojee";
// $message = $data->message = "awdawdawdasdawdaw";
//  $test = $data->edit_user($username , $message,"awdada","awdada","awdada","awdada");
//   var_dump($test);

?>
