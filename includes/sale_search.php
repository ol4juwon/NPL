<?php

$data =$_POST;
echo "hi ".$data['bedroom'];
function search($conn,$data){
if( !empty($data['bedroom']) ||
!empty($data['location']) ||
!empty($data['category']) ||
!empty( $data['type']) ||
!empty($data['minPrice'])||
!empty($data['maxPrice'])
){
    $bed = htmlspecialchars( strip_tags( $data['bedroom']));
$location = htmlspecialchars( strip_tags( $data['location']));
$category = htmlspecialchars( strip_tags(  $data['category']));
$prop_type =htmlspecialchars( strip_tags(  $data['type']));
$s_max_price = htmlspecialchars(strip_tags($data['maxPrice']));
$s_min_price = htmlspecialchars(strip_tags($data['minPrice']));

    $select_stm = "SELECT * From listings";
    $select_stm .= " WHERE ";
    $select_stm .= " number_beds = '".$bed."'  "; 
    $select_stm .= " AND location  = '".$location."' ";
    $select_stm .= " OR price > '".$s_min_price. "'";
   // $select_stm .= " AND price < '".$s_max_price. "')";
    $select_stm .= " AND type = '".$prop_type."' ";
    $select_stm .= " order by id asc ";
    echo $select_stm;
 $result = $conn->query($select_stm);
  
        // $result = $stmt->query($stmt);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){


            echo   " <div class=\"property-card\">";
          echo "<div style=\"width: 30%;\">";
       
          echo  "<img src=\"img/bernard-hermant-M0k4llbRpHU-unsplash 1.png\" alt=\"property card\" height=\"200px\" width=\"100%\">";
          echo "</div>";
          echo "<div style=\" width:70%;\">";
          echo  "<h2>{$row['title']} </h2>";
          echo "</div></div>";
            }
        }else{
            echo " number of rows = ".$result->num_rows.$conn->error;
        }

  
}else{
     $select_stm = "SELECT * FROM listings order by date_added ASC LIMIT 10, 11";
     $result = $conn->query($select_stm);

     while($row = $result->fetch_assoc()){
         echo $row['title'];
     }
}



$conn->close();
}
?>