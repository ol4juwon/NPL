<?php
ini_set('display_errors',true);
function getAgentID($email){
global $pdo;

$sql = "SELECT id from users where email = ?";
$result = $pdo->prepare($sql);
$result->bindParam(1,$email,PDO::PARAM_STR);
$result->execute();
$prop = $result->fetch();
return $prop['id'];
}

function getPropImg($id){
global $pdo;

$sql = "SELECT * from pictures where listing_id = ? Limit 1";
try{
$result = $pdo->prepare($sql);
$result->bindParam(1,$id,PDO::PARAM_INT);
$result->execute();
$image = $result->fetch();
return $image['image1'];
}catch(PDOException $e){
    echo $e;
}
}

?>
