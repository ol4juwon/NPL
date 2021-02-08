<?php
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));

include_once('../config/config.php');
include_once('../objects/lisitngs.php');

$list = new Users($conn);


?>