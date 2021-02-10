<?php 

$userInfo = $auth0->getUser();

if (!$userInfo) {
    // We have no user info
    // See below for how to add a login link
} else {
    // User is authenticated
    // See below for how to display user information
}


?>