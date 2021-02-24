
<!DOCTYPE html>
<html>
    <head>
<?php 
ini_set("display_errors",true);

require 'config.php';
require 'includes/createUser.php';


if(isset($_GET['code'])){
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    global $pdo;
    if(!isset($token['error'])){
        

        try{
        $gClient->setAccessToken($token['access_token']);

        $_SESSION['access_token'] = $token['access_token'];
        $google_Service = new Google_Service_Oauth2($gClient);

        $data = $google_Service->userinfo->get();
        
        
        }catch(Exception $e){
            
        }
        
        if(!empty($data['given_name'])){

            $_SESSION['user_first_name'] = $data['given_name'];

        }
        if(!empty($data['family_name'])){
            $_SESSION['user_last_name'] = $data['family_name'];

        }
        if(!empty($data['email'])){
            $_SESSION['user_email_address'] = $data['email'];

        }
        if(!empty($data['picture'])){
            $_SESSION['user_image'] = $data['picture'];

        }
        
            $_SESSION['gender'] = $data['gender'];

        
echo is_array($_SESSION);
        $user = new Users($pdo);
        if($user->check_user($_SESSION) == false){

       
        $user->create_user($_SESSION);
        }else{
            header('Location: sale.php');

        }

    }else{

header("Location: register.php");
    }


}

?>
    </head>
    <body>
   <?php   ?>
    </body>
</html>