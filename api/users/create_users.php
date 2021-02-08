<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once('../config/config.php');
include_once('../objects/lisitngs.php');

$list = new Users($conn);

$data = json_decode(file_get_contents("php://input"));

if(    !empty($data->username)){
  
    // set listing property values
    $users->user = $data->username;
    

    // create the listing
    
    if($users->create()){
        // set response code - 201 created
        http_response_code(201);
      
        // tell the user
        echo json_encode(array("message" => "Listing was created."));
    }
    // if unable to create the listing, tell the user
    else{
        // set response code - 503 service unavailable
        //echo $this->conn->error;
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create user."));
    }
}else{

    echo json_encode(array("message" => "incomplete user details inputted"));

}




?>