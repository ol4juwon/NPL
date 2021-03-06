<!DOCTYPE html>
<html><head>
<?php
include('config.php');
include('api/config/config.php');
include 'includes/createUser.php';
global $pdo;
$user = new Users($pdo);
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
    if($user->check_user($_SESSION['user_email_address'])){
        
    }

header("Location: profile.php");

}

if(!isset($_SESSION['access_token'])){
    try{
        $auth = $gClient->createAuthUrl();
    }catch(Exception $e){
        echo $e;
    }
$login_button = '<a href="'.$auth.'" >Login with google.</a>';

}else{
    header('Location: profile.php');
}

?>
           <!-- Bootstrap core CSS -->
           <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/default.css" rel="stylesheet">
        

</head>
<body>
<div class="navbar nav-shad navbar-expand-md fixed-top navbar-light bg-white ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NPL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-1 mb-md-1">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sale.php">For Sale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rent.php">For Rent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="requests.php ">Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <?php if(isset($_SESSION['user_first_name'])){ ?>
                      <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                  <li><a class="dropdown-item" href="agents/add_property.php">Add Property</a></li>
                                  
                                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                              </li>
                  <?php }?>
      </ul>
      
      <div class="d-flex " >
        <?php
        if(!isset($_SESSION['user_first_name'])){ 
        echo '<a href="register.php" class="btn btn-grey btn-secondary" >Sign In</a>';
        }else{
          echo '<img height="50px" style="border-radius:50%;" src="'.$_SESSION['user_image'].'"> ';
        }
        ?>
</div>
    </div>
  </div>
</div>
    <div class="content-container" >
    <h2>Register</h2>
        <!-- <form class="form-conrol" style="margin: 10px 10px 10px 10px; padding: 10px 10px 10px 10px; ;">
            <div class="form-row">
                <div class="form-group form-edit col-sm-3" >
                <label for="name-txt"> First Name</label>
                <input type="text" class="form-control" required id="name-txt" name="Fname" >
                </div>
                <div class="form-group form-edit col-sm-3" >
                <label for="name-txt"> Last Name</label>
                <input type="text" class="form-control" required id="lname-txt" name="Lname" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-edit col-sm-3" >
                <label for="email-txt"> Email Address</label>
                <input type="text" class="form-control" required id="email-txt" name="email" >
                </div>
                <div class="form-group form-edit col-sm-3" >
                <label for="phone-txt"> Phone Number</label>
                <input type="text" class="form-control" required id="phone-txt" name="phonr" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-edit col-sm-3" >
                <label for="password-txt"> Password</label>
                <input type="password" class="form-control" required id="password-txt" name="pword" >
                </div>
                <div class="form-group form-edit col-sm-3" >
                <label for="cpass-txt"> Confirm password</label>
                <input type="password" class="form-control" required id="cpass-txt" name="cpass" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-edit col-sm-3" >
                    &nbsp;
                <input type="submit" class="btn btn-secondary form-control" value="Register" required id="password-txt" name="register"  >
                </div>
                
            </div>
        </form> -->
        
        <h2></h2> 
        <div class="form-group form-edit col-sm-3" >
                <a class="btn btn-danger" href="<?php  echo $auth; ?>" ><img width="200px" src="img/google_logo.png"></a>
                </div>

    </div>

<?php 
 


?>

</body>
</html>