<?php
require("../api/config/config.php");


// (!empty($data->bedroom) &&
// !empty($data->location) &&
// !empty($data->category)) ||
// !empty( $data->type) ||
// !empty($data->minPrice)||
// !empty($data->maxPrice)
echo $_GET['category'];
$a = 1;
if(
$a == 1
){
   
    // $s_bed  =  $data->bedroom;
    // $s_location = $data->location;
    // $s_category = $data->category;
    // if(isset($s_type)){$s_type = $data->type;}
    if(isset($s_min_price)){$s_min_price = $data->minPrice;}
    if(isset($s_max_price)){$s_max_price = $data->maxPrice;}
    $select_stm = "SELECT * From listings where category = '".$_GET['category']."' order by id asc ";
echo $select_stm;
    //$select_stmt = "SELECT * from listings where number_beds ='".$_bed."' and location ='".$s_location."' order by price limit 10 asc"; 
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
    echo "Empty field";
}



$conn->close();
?>