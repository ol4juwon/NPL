<?php
require 'config.php';
require 'includes/createUser.php';
require 'api/config/config.php';
ini_set("display_errors",true);
echo $_SESSION['user_first_name'];
global $pdo;
if(isset($_POST['submit'])){
$stmt = "UPDATE users SET password = ? WHERE email = ?";
$passw = htmlspecialchars(strip_tags($_POST['pword']));
echo $passw;
try{
$slk = $pdo->prepare($stmt);
$slk->execute([$passw,$_SESSION['user_email_address']]);
if($slk->rowCount() >0 ){
    header("Location: profile.php");
}else{
    $msg = "Error creating password. please try again. ";
}
}catch(PDOException $e){
echo $e;
}catch(Exception $e){
echo $e;
}
}

?>

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css/bootstrap.css">
<script>
var pword = document.getElementById("pword")
  , vPass = document.getElementById("vPass");

function validatePassword(){
  if(pword.value != vPass.value) {
    vPass.setCustomValidity("Passwords Don't Match");
  } else {
    vPass.setCustomValidity('');
  }
}

pword.onchange = validatePassword;
vPass.onkeyup = validatePassword;

</script>
    </head>
    <body>
        <div class="container">
            <?php if(isset($msg)){  echo "<p>{$msg}</p>" ;?>
            <form action="" method="POST"> 
                <fieldset>
                <legend>Create Password</legend>
                <div class="form-row col-sm-3">
                    <label for="pword">Password</label>
                    <input type="password" required id="pword" name="pword" class="form-control">

                </div>
                <div class="form-row col-sm-3">
                    <label for="vPass">Verify Password</label>
                    <input type="password" required id="vPass" name="vPass" class="form-control">
                </div>
                <div class="form-row col-sm-3">
                    &nbsp;
                    <input class="form-control btn-danger btn-lg" type="submit" name="submit" value="Create Password">
                </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>