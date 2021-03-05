<?php
ini_set('display_errors', true);
//TODO create code to signify success or failure of uploads.


//var_dump($_FILES);
// var_dump($_POST);
$images  = array();
// var_dump($images);
$name  = $_FILES['images']['name'];
echo $name;


foreach($_FILES['images']['name'] as $key){
    var_dump($_POST);
    $upload_image = $upload_dir.basename($_FILES['images']['tmp_name'][$key]);
   echo $upload_image;
    $upload_dir = "uploads/";
      $filename = $_FILES['images']['name'][$key];		
    if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$upload_image)){
    // " moved ?".$moved;
    echo $upload_image;
    $images[] =$upload_image;
    }else{
        echo "done";
    }
}
?>
