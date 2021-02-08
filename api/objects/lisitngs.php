<?php 

class Lisitngs{
private $conn;
private $db_table = "NPL";


// Rental properties

public $id;
public $title;
public $location;
public $price;
public $listing_type;
public $date_added;
public $agent_id;
public $parking;
public $description;
public $num_beds;
public $num_toilets;
public $furnished;
public $serviced;
public $service_charge;
public $type;


public function __construct($db){
    $this->conn = $db;
}
// create listing
function create(){

}


// rentals 
function list_rentals(){
    $query = " SELECT * from ". $this->db_table. " where listing_type = 'rentals' ORDER BY id";
    //echo $query;
     $stmt = $this->conn->prepare($query);
    if($stmt ->execute()){
    
    return $query;
    }else{
        echo $this->conn->error;
    }
    
    }


    function list_one_rental($rental_id){
        $query = "SELECT * from ".$this->db_table." WHERE id = '".$rental_id."'LIMIT 0,1 ";
    
        $stmt = $this->conn->prepare( $query );
    
      
        // execute query
        if($stmt->execute()){
          return $query;
        }else{
            echo $this->conn->error;
        }
    }


    // sales
    function list_sales(){

    }

    function list_one_sale(){

    }

    function verify_listings($listing_id){

    }

    function delete_listing($listing_id){

    }

    function premium_listing($listing_id){

    }
}







?>