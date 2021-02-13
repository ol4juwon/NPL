<?php

$data =$_POST;
echo "jjdk";
var_dump($data);
function rent_search($conn,$data){
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
    $select_stm .= " (number_beds >= '".$bed."'  "; 
    $select_stm .= " AND type = '".$prop_type."' ";
    $select_stm .= " AND location  = '".$location."') ";
    $select_stm .= " OR price > '".$s_min_price. "'";
   // $select_stm .= " AND price < '".$s_max_price. "')";
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
          echo "<h4>{$row['location']}</h4>";
          echo "<p>{$row['Description']} </p>";
          echo " <button style=\"margin: 5px;\" >{$row['number_beds']} Bedrooms</button> <button  >{$row['toilets']} Toilets</button> <button  >{$row['bathrooms']} bathroom</button>  ";
          echo "<p style=\"text-align:right;\"><a href=\"property.php?id={$row['id']}\">More Details</a></p> ";
          echo "</div></div> &nbsp;";
            }
        }else{
            echo " number of rows = ".$result->num_rows.$conn->error;
        }

  
}else{
     $select_stm = "SELECT * FROM listings order by date_added ASC ";
     $result = $conn->query($select_stm);
echo $select_stm;
     while($row = $result->fetch_assoc()){
        echo   " <div class=\"property-card\">";
        echo "<div style=\"width: 30%;\">";
     
        echo  "<img src=\"img/bernard-hermant-M0k4llbRpHU-unsplash 1.png\" alt=\"property card\" height=\"200px\" width=\"100%\">";
        echo "</div>";
        echo "<div style=\" width:70%;\">";
        echo  "<h2>{$row['title']} </h2>";
        echo "<h4>{$row['location']}</h4>";
        echo "<p>{$row['Description']} </p>";
        echo " <button class=\"form-control\" style=\"margin: 5px;\" >{$row['number_beds']} Bedrooms</button>
         <button class=\"form-control\"  >{$row['toilets']} Toilets</button> <button  >{$row['bathrooms']} bathroom</button>  ";
        echo "<p style=\"text-align:right;\"><a href=\"property.php?id={$row['id']}\">More Details</a></p> ";
        echo "</div></div> &nbsp;";
     }
}



$conn->close();
}
?>