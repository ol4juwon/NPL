<?php
    include "vendor/autoload.php";


$g_client  = new Google_Client();

$g_client->setClientId('403949553367-u5mto5tmnqttm68j4n37a4hkr1ssukh7.apps.googleusercontent.com');
$g_client->setClientSecret('6L5M-TPh3-kRK-KgV_O8TKCr');
$g_client->setRedirectUri('http://localhost:8080/login.php');
$g_client->addScope("email");

$auth_url = $g_client->createAuthUrl();

echo '<a href="'.$auth_url.'">Login </a>';



?>