<?php 

if(isset($_SESSION['access_token'])){
echo $_SESSION['user_first_name'];
}else{
    header("Location: register.php");
}

?>