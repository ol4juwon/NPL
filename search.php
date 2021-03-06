<?php
ini_set('display_errors',true);
require("api/config/config.php");
var_dump($_POST);
if($_POST['category'] == "rent" ){
         
 header("Location: rent.php");
  

}elseif($_POST['category'] == "sell" ){

  header("Location: sale.php");
  
             

}
?>