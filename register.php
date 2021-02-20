<!DOCTYPE html>
<html><head>
<?php
include('config.php');
include('api/config/config.php');

$login_button ="";

if(isset($_GET['code'])){
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    
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




    }

header("Location: profile.php");

}
var_dump($_SESSION);

if(!isset($_SESSION['access_token'])){
    try{
    $auth = $gClient->createAuthUrl();
    }catch(Exception $e){
        echo $e;
    }
    echo "jkk";
$login_button = '<a href="'.$auth.'" >Login with google.</a>';

}else{
    echo '<a href="logout.php">Logout </a> ';
}

?>
</head>
<body>
<p>he dey </p>
<?php 
 
if($login_button == ''){
    if(isset($_SESSION)){
var_dump($_SESSION);
    
    echo '<img src="'.$_SESSION['user_image'].'" >';
    echo $_SESSION['user_first_name'];
}
}else{
   echo  $login_button."llm";
}

?>
<h1>Hi</h1>
<?Php // echo $_SESSION['user_first_name'];
?>
</body>
</html>