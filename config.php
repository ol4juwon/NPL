<?php

require_once("vendor/autoload.php");


// Google API configuration
define('GOOGLE_CLIENT_ID', '403949553367-u5mto5tmnqttm68j4n37a4hkr1ssukh7.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '6L5M-TPh3-kRK-KgV_O8TKCr');
define('GOOGLE_REDIRECT_URL', 'http://localhost:8888/profile.php');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
// require_once 'google-api-php-client/Google_Client.php';
// require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);
$gClient->addScope('email');
$gClient->addScope('profile');
$gClient->addScope('openid');

//$google_service = new Google_Service_Oauth2($gClient);
?>