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

?>
