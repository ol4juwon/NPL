<?php

class Users{
private $conn;
private $db_name="NPL";


public $id;
public $username;
public $first_name;
public $last_name;
public $admin;
public $company;
public $phone_no;
public $email;
public $password;

public function __construct($db){
    $this->conn = $db;
}

function create_user(){

}

function delete_user($uid){

}

function verify_user($uid){

}

function read_users(){

}

}
?>