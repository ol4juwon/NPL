<?php
    include("config.php");
    $gClient->revokeToken();
    session_destroy();

    header("Location:register.php");

?>