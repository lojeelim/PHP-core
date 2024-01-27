<?php 
require("../model/data_model.php");

class data_controller {
  private  $data;
    public function __construct(){
     $this->data = new data_model();
    }

//admin side 

public function add_admin($username ,$email ,$mobile , $password){
  $this->data->username = $username;
  $this->data->email = $email;
  $this->data->mobile = $mobile;
  $this->data->password = $password;
  $this->data->insert_admin();
}

public function display_admin(){
  return $this->data->GET_admin();
}

public function display_admin_via_username($username){
  return $this->data->GET_admin_via_username($username);
}


public function login_admin($username,$password){
  if($this->data->GET_exist_admin($username)){
     $hash  = $this->data->GET_password_admin($username);          
    if(password_verify($password,$hash)){
      return true;
    }
    else{
      return false;
    }
  }
}

public function check_if_exist_admin($username){
  return $this->data->GET_exist_admin($username);
}

public function GET_pass_admin($username){
  return $this->data->GET_password_admin($username);    
}

public function edit_admin($username,$email,  $mobile){
  return $this->data->update_admin($username, $email ,$mobile);
}

public function admin_assign($serial ,$technician,$admin){
  return $this->data->admin_assign_tech($serial ,$technician , $admin);
}

//must be small A
public function delete_admin($username){
  return  $this->data->delete_Admin($username);
}

//client side
  //inserting
    public function register_user($lname,$fname,$m,$username,$email,$mobile,$address,$house,$password){
      $this->data->lname    = $lname;
      $this->data->fname    = $fname;
      $this->data->m        = $m;
      $this->data->username = $username;
      $this->data->email    = $email;
      $this->data->mobile   = $mobile;
      $this->data->address  = $address;
      $this->data->house    = $house;
      $this->data->password = $password;
      $this->data->insert_user();
    }

  //retrieving
    public function display_user(){
      return $this->data->GET_user();
    }

    public function display_user_via_username($username){
      return $this->data->GET_user_via_username($username);
    }

  //login
    public function login_user($username,$password){
      if($this->data->GET_exist_user($username)){
         $hash  = $this->data->GET_password_user($username);          
        if(password_verify($password,$hash)){
          return true;
        }
        else{
          return false;
        }
      }
    }

    public function check_if_exist($username){
      return $this->data->GET_exist_user($username);
    }

    public function GET_pass_user($username){
      return $this->data->GET_password_user($username);    
    }
 

    public function display_underprocess($username){
      return $this->data-> GET_user_process_item($username);    
    }
   
  //updating
     public function Edit_user($username,$lname ,$fname ,$m ,$email ,$mobile ,$addres,$house){
      return $this->data->update_user($username,$lname ,$fname ,$m ,$email ,$mobile ,$addres ,$house);
    }

    public function change_user_password($username,$password){
      return $this->data->update_user_password($username,$password);
    }
    //deleting
    public function delete_user($username){
      return  $this->data->delete_User($username);
    }
  //counting

    public function count_client(){
      return $this->data->count_user();
    }      
//end of user controller


//Tech controller

  //inserting
    public function register_tech($lname,$fname,$m,$username,$email,$mobile,$address,$password){
      $this->data->lname    = $lname;
      $this->data->fname    = $fname;
      $this->data->m        = $m;
      $this->data->username = $username;
      $this->data->email    = $email;
      $this->data->mobile   = $mobile;
      $this->data->address  = $address;
      $this->data->password = $password;
      $this->data->insert_technician();
    }

  //retrieving
    public function display_tech(){
      return $this->data->GET_technician();
    }

    public function display_tech_via_username($username){
      return $this->data->GET_technician_via_username($username);
    }

   
  //login
    public function login_tech($username,$password){
      if($this->data->GET_exist_tech($username)){
      $hash  = $this->data->GET_password_technician  ($username);          
        if(password_verify($password,$hash)){
          return true;
        }
        else{
          return false;
        }
      }
    }

    public function GET_pass_tech($username){
      return $this->data->GET_password_technician($username);    
    }

  //deleting
    public function delete_tech($username){
      return  $this->data->delete_technician($username);
    }
  //counting
    public function count_tech(){
      return $this->data->count_technician();
    }
    //end of tech controller


  
//Item Controller
//inserting
  public function send_gadget($serial,$model,$gadget,$damage, $status,$client,$comment){
    $this->data->serial     = $serial;
    $this->data->model      = $model;
    $this->data->gadget     = $gadget;
    $this->data->damage     = $damage;
    $this->data->status     = $status;
    $this->data->client     = $client;
    $this->data->comment    = $comment;
    $this->data->insert_item();
  }

//retrieving
  public function display_all_item(){
    return $this->data->GET_all_item();
  }

  public function display_all_item_client($serial){
    return $this->data->GET_all_item_client($serial);
  }

  public function display_all_item_tech($serial){
    return $this->data->GET_all_item_tech($serial);
  }

  public function check_if_exist_item($serial){
    return $this->data->GET_exist_item($serial);
  }

  
  public function display_all_pending_item(){
    return $this->data->GET_all_pending_item();
  }

  public function display_all_done_item($username){
    return $this->data->GET_all_done_item($username );
  }

  public function display_client_unset_item($username){
    return $this->data->GET_client_unset_item($username);
  }


  public function display_tech_accepted_item($username){
    return $this->data->GET_technician_accepted_item($username);
  }
  // public function display_all_unset_item(){
  //   return $this->data->GET_all_unset_item();
  // }

  

  public function display_all_pickup_item($username){
    return $this->data->GET_all_pickup_item($username);
  }


  public function display_all_deliver_item($username){
    return $this->data->GET_all_deliver_item($username);
  }
  
  public function display_all_reject_item($username){
    return $this->data->GET_all_reject_item($username );
  }
 

  public function display_sum_all_item($username){
    return $this->data->GET_all_sum_done_item($username);
  }
  

  public function display_client_send_gadget($username){
    return $this->data->GET_client_send_gadget($username);
  }

  public function display_tech_assign_item($username){
    return $this->data->GET_technician_assign_item($username);
  }

  //counting
  public function client_count_item($username){
    return $this->data->count_client_item($username);
  }


  public function client_count_pending_item($username){
    return $this->data->count_client_pending_item($username);
  }
  
  public function client_count_done_item($username){
    return $this->data->count_client_done_item($username);
  }
  public function client_count_underprocess_item($username){
    return $this->data->count_client_underprocess_item($username);
  }
  

  public function client_count_reject_item($username){
    return $this->data->count_client_reject_item($username);
  }

  public function client_count_unset_item($username){
    return $this->data->count_client_unset_item($username);
  }

  public function count_accept_item($username){
    return $this->data->count_all_accept_item($username);
  }


  public function count_pickup_item($username){
    return $this->data->count_pickup_item($username);
  }

  public function count_deliver_item($username){
    return $this->data->count_deliver_item($username);
  }
  
  //updating
  public function change_status_item($serial,$status){
   return $this->data->update_item_status($serial,$status);
  }

  public function set_deal_item($serial,$remarks){
    return $this->data->update_item_deal($serial,$remarks);
   }
 
  public function done_item($serial,$status,$datedone,$comment){
    return $this->data->update_item_done($serial,$status,$datedone,$comment);
   }

   public function edit_item($serial , $model , $gadget , $damage , $disc){
    return $this->data->update_item($serial , $model , $gadget , $damage , $disc);
   }



  public function cancel_item($serial){
    return $this->data->delete_item($serial);
  }
  //Close Item Controller
  



  //message

public function send_message($username,$serial,$message){
  $this->data->username = $username;
  $this->data->serial = $serial;
  $this->data->message = $message;
  $this->data->insert_message();
}

public function del_message($data){
return $this->data->delete_message($data);
}

public function edit_message($id){
return $this->data->update_message($id);
}

public function edit_message_status($serial,$status ,$admin,$technician){
return $this->data->update_message_status($serial,$status,$admin,$technician);
  }

public function display_client_message($username){
  return $this->data->GET_client_message($username);
}

public function display_tech_message($username){
  return $this->data->GET_technician_message($username);
}

public function display_admin_message($username){
  return $this->data->GET_addmin_message($username);
}

public function display_message_for_admin(){
  return $this->data->GET_message_for_admin();
}
public function display_message_for_technician($username){
  return $this->data->GET_message_for_technician($username);
}


public function count_message_for_admin(){
  return $this->data->count_admin_message();
}

public function count_message_for_tech($username){
  return $this->data->count_tech_message($username);
}
//transaction

public function make_transaction($client,$technician,$admin,$price,$service,$serial,$item,$status){
  $this->data->client    = $client;
  $this->data->technician= $technician;
  $this->data->admin     = $admin;
  $this->data->price     = $price;
  $this->data->service   = $service;
  $this->data->serial    = $serial;
  $this->data->gadget    = $item;
  $this->data->status    = $status;  
  $this->data->insert_transaction();
}
//start here
public function display_transaction(){
  return $this->data->get_transaction();
}

public function count_transaction(){
  return $this->data->count_transaction();
}

public function total_admin_earn(){
  return $this->data->admin_earn();
}


public function client_total_payment($username){
  return $this->data->client_payment($username);
}

public function total_technician_earn($username){
  return $this->data->technician_earn($username);
}

public function display_client_done_fix($username){
  return $this->data->GET_client_donefix($username);
}

public function display_tech_done_fix($username){
  return $this->data->GET_tech_donefix($username);
}


// public function display_id_done_fix($id){
//   return $this->data->GET_id_donefix($id);
// }
public function count_client_done_fix($username){
  return $this->data->count_client_donefix($username);
}
  public function count_client_all_transac($username){
    return $this->data->count_all_done_done_transac($username);
}

public function count_tech_done_fix($username){
  return $this->data->count_tech_donefix($username);
}



public function update_remarks_transaction($id,$remarks){
  return $this->data->update_transaction_remarks($id,$remarks);
}


public function display_client_done_transac($username){
  return $this->data->GET_client_done_transac($username);
}




  //helpers
  public function escape_string($value){
    return $this->data->real_escape_string($value);
  }
  public function __destruct(){
    unset($this->data);
  }

}//end of class

// $data= new data_model();

// $r = $data->GET_tech_donefix("123");

// var_dump($r);


// $data= new data_controller();
// $r = $data->display_tech_done_fix("123");

// var_dump($r);


// $r = $data->display_transaction();

// var_dump($r);


// $data= new data_controller();

// $r = $data->make_transaction("aw","awa","aw","1","1","awa","awwww","awa");

// // while($row = mysqli_fetch_assoc($r)){

// var_dump($r);
// // }
// $data = new data_controller();

//  $test = $data->login_admin("admin","lim");

// var_dump($test);


// $data= new data_controller();

// $r = $data->display_message();

// var_dump($r);
?>

