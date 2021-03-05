<?php 
ini_set("display_errors", true);
function create_request($data = array()){
    Global $pdo;
// var_dump($data);
    $name = htmlspecialchars(strip_tags($data['name']));
    $phone = htmlspecialchars(strip_tags($data['phone']));
    $email = htmlspecialchars(strip_tags($data['email']));
    $comments = htmlspecialchars(strip_tags($data['comments']));
    $category = htmlspecialchars(strip_tags($data['category']));
    $max = htmlspecialchars(strip_tags($data['maxPrice']));
    $min = htmlspecialchars(strip_tags($data['minPrice']));
    $type = htmlspecialchars(strip_tags($data['type']));
    $bedroom = htmlspecialchars(strip_tags($data['bedroom']));
    $location = htmlspecialchars(strip_tags($data['location']));
$budget = $max;

    $insert_stmt = "INSERT into requests";
    $insert_stmt .= "( name, phoneNum,email,comments,propType,rentType,reqBed,reqLocation,budget )";
    $insert_stmt .= " VALUES ";
    $insert_stmt .= "( '{$name}', '{$phone}', '{$email}'";
    $insert_stmt .= " ,'{$comments}', '{$category}', '{$type}',";
    $insert_stmt .= " '{$bedroom}', '{$location}',";
    $insert_stmt .= " '{$budget}') ";

    if($pdo->query($insert_stmt)){
       $msg = "Your Request was successfully made";
       

    }else{
        $msg  = "Error haapened on ".$pdo->error;
    }

    return $msg;

}
?>