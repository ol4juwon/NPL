<!DOCTYPE html>
<?php

include 'config.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=" width=device-width, initial-scale=1 ">
        <meta name="description" content="">
        <meta name="author" content="Ol4juwon">
        <meta name="company" content="Nigeria Property Link">
        <title> Nigeria Property Link::Contact Us</title>

        <style type="text/css">
            @font-face {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
                unicode-range: U + 0460-052F, U + 1C80-1C88, U + 20B4, U + 2DE0-2DFF, U + A640-A69F, U + FE2E-FE2F;
            }</style>
        
        
            <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/default.css" rel="stylesheet">
        
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
        
            
            <link href="navbar-top.css" rel="stylesheet">
          
    </head>
    <body>
        <div class="navbar navbar-expand-md fixed-top navbar-light bg-white ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">NPL</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-1 mb-md-1">
                  <li class="nav-item ">
                    <a class="nav-link"  href="index.php">Home</a>
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
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
                  </li>
                  <?php if(isset($_SESSION['user_first_name'])){ ?>
                      <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="agents/edit_profile.php">Edit Profile</a></li>
                                  <li><a class="dropdown-item" href="agents/add_property.php">Add Property</a></li>
                                  
                                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                              </li>
                  <?php }?>
                </ul>
                <form class="d-flex">
                <?php
        if(!isset($_SESSION['user_first_name'])){ 
        echo '<a href="register.php" class="btn btn-grey btn-secondary" > Register/Sign In</a>';
        }else{
          echo '<img height="50px" style="border-radius:50%;" src="'.$_SESSION['user_image'].'"> ';
        }
        ?>                </form>
              </div>
            </div>
          </div>


    </body>
</html>