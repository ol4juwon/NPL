<?php

function Search_sales($data = array(),$page_num,$conn){
//var_dump($data);
if($data != null){
$limit = 10;
$start_page = ($page_num -1) * $limit;
$bed = htmlspecialchars( strip_tags( $data['bedroom']));
$location = htmlspecialchars( strip_tags( $data['location']));
$prop_type =htmlspecialchars( strip_tags(  $data['type']));
$s_max_price = htmlspecialchars(strip_tags($data['maxPrice']));
$s_min_price = htmlspecialchars(strip_tags($data['minPrice']));

$select_stm = "SELECT * From listings";
$select_stm .= " WHERE ";
$select_stm .= " (number_beds >= '".$bed."'  "; 
$select_stm .= " AND  category = 'sell' AND location  = '".$location."') ";
$select_stm .= " OR (price > '".$s_min_price. "' AND price < '".$s_max_price. "')";
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
    $previous = $page_num - 1;
    $next = $page_num + 1;

    $rows = $result->fetch_all(MYSQLI_ASSOC);
    echo "  <div class=\"res_bar\" ><div>Results: Page {$page_num} of {$pages} </div><div>";
        if($page_num != 1){
            $previous = $page_num-1;
        echo "<a href=\"sale.php?page={$previous}\">Previous</a>";  }

        echo "<a href=\"sale.php?page={$page_num}\">{$page_num}</a>"; 
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
    $select_stm = "SELECT * FROM listings where category = 'sell' order by date_added ASC ";
     
    if($result = $conn->query($select_stm)){

    }else{
        echo $conn->error;
    }
     $rows = $result->fetch_all(MYSQLI_ASSOC);
     // $result = $stmt->query($stmt);
    $sql_paginate  = "SELECT count(id) as id FROM listings";
    $result1 = $conn->query($sql_paginate);
    $propertyCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $propertyCount[0]['id'];
    $pages = ceil($total / 10);
    $previous = $page_num - 1;
    $next = $page_num + 1;
    echo "  <div class=\"res_bar\" ><div>Results: Page {$page_num} of {$pages} </div><div>";
    if($page_num != 1){
        $previous = $page_num-1;
    echo "<a href=\"sale.php?page={$previous}\">Previous</a>";  }

    echo "<a href=\"sale.php?page={$page_num}\">{$page_num}</a>"; 
    if($next == $pages){
    echo "<a href=\"sale.php?page={$next}\">Next</a>"; }
    echo "</div></div><div>";
     foreach($rows as $row) :
        echo   " <div class=\"property-card\" style=\"box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;\">";
        echo "<div style=\"width: 30%;\">";
     
        echo  "<img class=\"img-fluid\" src=\"img/bernard-hermant-M0k4llbRpHU-unsplash 1.png\" alt=\"property card\" height=\"200px\" width=\"100%\">";
        echo "</div>";
        echo "<div style=\" width:70%;\">";
        echo  "<h2>{$row['title']} </h2>";
        echo "<h4>{$row['location']}</h4>";
        echo "<p>{$row['Description']} </p>";
        echo " <button class=\"btn btn-outline-secondary \" style=\"margin: 5px;\" >{$row['number_beds']} Bedrooms</button> <button class=\"btn btn-outline-secondary \" >{$row['toilets']} Toilets</button> <button class=\"btn btn-outline-secondary \" >{$row['bathrooms']} bathroom</button>  ";
        echo "<p style=\"text-align:right;\"><a href=\"property.php?id={$row['id']}\">More Details</a></p> ";
        echo "</div></div> &nbsp;";
     endforeach;
}

}







?>