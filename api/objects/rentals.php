<?php 

class Rentals{
private $conn;
private $db_table = "rentals";

public $id;
public $title;
public $location;
public $price;
public $date_added;
public $agent_id;
public $features;

public function __construct($db){
    $this->conn = $db;
}

function read(){
    $query = " SELECT * from ". $this->db_table. " ORDER BY id";
    //echo $query;
     $stmt = $this->conn->prepare($query);
    if($stmt ->execute()){
    
    return $query;
    }else{
        echo $this->conn->error;
    }
    
    }

    function readOne($rental_id){
        $query = "SELECT * from ".$this->db_table." WHERE id = '".$pcode."'LIMIT 0,1 ";
    
        $stmt = $this->conn->prepare( $query );
    
      
        // execute query
        if($stmt->execute()){
          return $query;
        }else{
            echo $this->conn->error;
        }
    }

}







?>