<?php
    // header files
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // import config file
    require("../api/config/config.php");

    // collect posted data
    $data = file_get_contents("php://input");

    //check if post data is set
    if(isset($_POST)){
        //collect mandatory data
        $s_location = $_POST['location'];
        $type = $_POST['type'];
        $bed = $_POST['bedroom'];
        $min_price = $_POST['minPrice'];
        $max_price = $_POST['maxPrice'];






    }


?>