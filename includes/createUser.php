<?php
// ini_set("log_errors",true);
include 'api/config/config.php';


class Users{


    public $id;
    public $firstName;
    public $lastName;
    public $picture;
    public $gender;
    public $email;
    private $pdo;

    public function __construct($db){
        $this->pdo = $db;

    }


    // TODO : create new user function
    function create_user($data = array()){
        var_dump($data);
        $fname = $data['user_first_name'];
        $lname = $data['user_last_name'];
        $picture = $data['user_image'];
        $gender = $data['gender'];
        $email = $data['user_email_address'];
        $uid = $data['access_token'];
        

        $stmt = "INSERT INTO users (oauth_uid,first_name,last_name,email,picture,gender,created,modified)";
        $stmt .= " VALUES (?,?,?,?,?,?,?,?)";
        $data = [$uid,$fname,$lname,$email,$picture,$gender,date("y-m-d h:i:s"),date("y-m-d h:i:s")];
       try{
        $query  = $this->pdo->prepare($stmt)->execute($data);
       }catch(PDOException $e){
           echo $e->getMessage();

       }catch(Exception $e){
           echo $e->getMEssage();

       }

        // if($this->pdo->query($query)){
        //     $msg = "user successfully created";
        //     return $msg;
        // }else{
        //     $msg = "error";
        //     return $msg;
        // }

    }

     // TODO : check if user exists already
    function check_user($data){
        $sql  = "SELECT * FROM users where email = ? ";
        try{

            //echo $stmt;
            $stmt =  $this->pdo->prepare($sql);
            $stmt->execute([$data]);

           // var_dump( $query);
           
        }catch(PDOException $pe){
echo $pe;
        }catch(Exception $e){
echo $e;
        }
        if($stmt->rowCount() == 1){
            return true;
        }
        
    }

    // TODO : regular email login
    function login($data){
        $stmt = "SELECT * from users where username=? and password=? ";

        try{
            $result = $this->pdo->prepare($stmt)->execute($data);
        }catch(PDOException $ex){
            $msg = $ex->getMessage();
        }catch(Exception $e){
            $msg = $e->getMessage();
        }

        if($result->rowCount() == 1){
            return $result;
        }else{
            return $msg;
        }

    }

    // TODO : update last login

    function lastLogin($data){


    }

    // TODO : sms verification

    // Todo : email verification 

    // TODO : check


}


?>