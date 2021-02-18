<?php
ini_set("display_errors", true);
    $db_host = "localhost";
    $db_name = "nigehtms_npl";
    $user = "nigehtms_ppl";
    $pword = "0L4kunle";
    $conn;
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
       $pdo = new PDO($dsn, $user, $pword, $options);
   } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }
 
    // $conn = new mysqli(
    //     $db_host,
    //     $user,
    //     $pword,
    //     $db_name
    //   );
   
    //  if($conn ->connect_error){
    //      echo "Connecting to database failed";
    //      echo $conn->connect_errno;
    //      echo $conn->connect_error;
    //      exit();

   
    //  }else{
       
    //  }
?>