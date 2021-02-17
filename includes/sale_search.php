<?php

function search($conn,$data,$page_no){
if( !empty($data['bedroom']) ||
!empty($data['location']) ||
!empty($data['category']) ||
!empty( $data['type']) ||
!empty($data['minPrice'])||
!empty($data['maxPrice'])
){
    $limit = 1;
    $start_page = ($page_no -1) * $limit;
    $bed = htmlspecialchars( strip_tags( $data['bedroom']));
$location = htmlspecialchars( strip_tags( $data['location']));
$category = htmlspecialchars( strip_tags(  $data['category']));
$prop_type =htmlspecialchars( strip_tags(  $data['type']));
$s_max_price = htmlspecialchars(strip_tags($data['maxPrice']));
$s_min_price = htmlspecialchars(strip_tags($data['minPrice']));

    $select_stm = "SELECT * From listings";
    $select_stm .= " WHERE ";
    $select_stm .= " (number_beds >= '".$bed."'  "; 
    $select_stm .= " AND location  = '".$location."') ";
    $select_stm .= " OR price > '".$s_min_price. "'";
   // $select_stm .= " AND price < '".$s_max_price. "')";
    $select_stm .= " AND type = '".$prop_type."' ";
    $select_stm .= " LIMIT {$start_page},{$limit} ";
    //$select_stm .= " order by id asc ";
 $result = $conn->query($select_stm);
  
        // $result = $stmt->query($stmt);
        $sql_paginate  = "SELECT count(id) as id FROM listings";
        $result1 = $conn->query($sql_paginate);
        $propertyCount = $result1->fetch_all(MYSQLI_ASSOC);
        $total = $propertyCount[0]['id'];
        $pages = ceil($total / $limit);
        $previous = $page_no - 1;
        $next = $page_no + 1;

        $rows = $result->fetch_all(MYSQLI_ASSOC);
        echo "  <div class=\"res_bar\" ><div>Results: Page {$page_no} of {$pages} </div><div>";
            if($page_no != 1){
                $previous = $page_no-1;
            echo "<a href=\"sale.php?page={$previous}\">Previous</a>";  }

            echo "<a href=\"sale.php?page={$page_no}\">{$page_no}</a>"; 
            if($next == $pages){
            echo "<a href=\"sale.php?page={$next}\">Next</a>"; }
            echo "</div></div><div>";
            foreach($rows as $row):
            echo   " <div class=\"property-card\">";
          echo "<div style=\"width: 30%;\">";
       
          echo  "<img src=\"img/bernard-hermant-M0k4llbRpHU-unsplash 1.png\" alt=\"property card\" height=\"200px\" width=\"100%\">";
          echo "</div>";
          echo "<div style=\" width:70%;\">";
          echo  "<h2>{$row['title']} </h2>";
          echo "<h4>{$row['location']}</h4>";
          echo "<p>Description{$row['Description']} </p>";
          echo " <button style=\"margin: 5px;\" >{$row['number_beds']} Bedrooms</button> <button  >{$row['toilets']} Toilets</button> <button  >{$row['bathrooms']} bathroom</button>  ";
          echo "<p style=\"text-align:right;\"><a href=\"property.php?id={$row['id']}\">More Details</a></p> ";
          echo "</div></div> &nbsp;";
            endforeach;
        echo "</div>";
        

  
}else{
     $select_stm = "SELECT * FROM listings order by date_added ASC ";
     $result = $conn->query($select_stm);
echo $select_stm;
     $rows = $result->fetch_assoc(MYSQLI_ASSOC);
     foreach($rows as $row) :
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
     endforeach;
}



$conn->close();
}
?>