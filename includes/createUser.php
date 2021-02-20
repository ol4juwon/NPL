<?php



class Users{


    public $id;
    public $firstName;
    public $lastName;
    public $picture;
    public $gender;
    public $email;

    public function __construct($db){
        $this->pdo = $db;

    }

    function create_user($data = array()){
        var_dump($data);

    }



}


?>