<?php

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require("../api/config/config.php");
$data = json_decode( file_get_contents("php://input"));

// (!empty($data->bedroom) &&
// !empty($data->location) &&
// !empty($data->category)) ||
// !empty( $data->type) ||
// !empty($data->minPrice)||
// !empty($data->maxPrice)
//echo $_GET['category'];
if( !empty($_POST['bedroom']) ||
!empty($_POST['location']) ||
!empty($_POST['category']) ||
!empty( $_POST['type']) ||
!empty($_POST['minPrice'])||
!empty($_POST['maxPrice'])
){
    echo "hi:" ;
    echo $_POST['bedroom'];
echo $_POST['location'];
echo $_POST['category'];
echo $_POST['type'];
echo "end. ";
    if(isset($s_min_price)){$s_min_price = $data->minPrice;}
    if(isset($s_max_price)){$s_max_price = $data->maxPrice;}
    $select_stm = "SELECT * From listings where category = '".$_GET['category']."' order by id asc ";
echo " dd: ".$select_stm;
 $result = $conn->query($select_stm);
  
        // $result = $stmt->query($stmt);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row["title"];
            }
        }else{
            echo " number of rows = ".$result->num_rows;
        }

  
}else{
     $select_stm = "SELECT * FROM listings order by date_added ASC";
     $result = $conn->query($select_stm);
echo ";kj";
     while($row = $fetch_assoc()){
         echo $row['title'];
     }
}



$conn->close();
?>