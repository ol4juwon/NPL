<?php
require "vendor/autoload.php";
include 'config.php';
include 'api/config/config.php';
if(!isset($_GET['id'])){
$msg = 'Page not found ';
echo "<script>alert('$msg');</script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ol4juwon">
    <title>Nigeria Property Link::</title>
    <!-- /* jquery */ -->
<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <style type="text/css">



  @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
        unicode-range: U + 0460-052F, U + 1C80-1C88, U + 20B4, U + 2DE0-2DFF, U + A640-A69F, U + FE2E-FE2F;
    }</style>

   <!-- Bootstrap core CSS -->
    <link href="css/default.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
   



  </head>
  <body>
    
        <div class="navbar nav-shad navbar-expand-md fixed-top navbar-light bg-white ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="" alt="Logo" ></a>
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
                echo '<a href="register.php" class="btn btn-grey btn-secondary" > Register/Sign In</a>';
                }else{
                echo '<img height="50px" style="border-radius:50%;" src="'.$_SESSION['user_image'].'"> ';
                }
                ?>
        </div>
            </div>
        </div>
        </div>
<?php 

$sql = "SELECT * FROM listings where id = ?";
$id= htmlentities(strip_tags($_GET['id']));
echo $sql;
$data = [$_GET['id']];
var_dump($data);
try{
$res = $pdo->prepare($sql);
$res->bindParam(1,$id,PDO::PARAM_INT);
$res->execute();
$prop = $res->fetch();
}catch(PDOException $e){
    echo $e;
}


?>
        <div class="property-page">
            <div class="prop-img-div">
                <img src="" alt="" width="100%" height="400px" >
            </div>
            <div class="prop-detals">
                <h2><?php echo $prop['title'];  ?></h2>
                <h4>Features</h4>
                <p>Location: <?php echo $prop['location']; ?>
                <p>Bedroom <?php echo $prop['number_beds'] ?> </p>
                <p>toilets<?php echo $prop['number_toilets']; ?></p>
                <p>bathrooms</p>
                <p>furnished: <?php echo $prop['furnished'] == 1 ? 'Yes' : 'No'  ?></p>
                <p>serviced: <?php echo $prop['serviced'] == 1 ? 'Yes' : 'No'  ?></p>
                <h4>Description:</h4>
            </br>
            <p>
<?php echo $prop['Description']; ?>            
            </p>
                <p>Agent Details</p>
            </div>
        </div>
  </body>
</html>