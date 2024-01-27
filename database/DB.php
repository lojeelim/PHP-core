<?php
class database{
private $con;
public $localserver ="localhost";
public $servername ="root";
public $password ="";
public $database="DB";

  public function __construct(){   
    $this->con = new mysqli($this->localserver , $this->servername , $this->password , $this->database);   
   }

  public function execute($sql){
    return mysqli_query($this->con, $sql);
    }

    public function mysqli_real_escape_string($data){
    return mysqli_real_eScape_string($this->con,$data);
   }
   
  public function __destruct(){
    mysqli_close($this->con);
    }
    
}//end of class