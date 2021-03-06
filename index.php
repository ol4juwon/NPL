<?php
require "vendor/autoload.php";
include 'config.php';
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
        echo '<a href="register.php" class="btn btn-grey btn-secondary" > Sign In</a>';
        }else{
          echo '<img height="50px" style="border-radius:50%;" src="'.$_SESSION['user_image'].'"> ';
        }
        ?>
</div>
    </div>
  </div>
</div>
<div class="seak-cr" style="background-color: white;" >

      <div class="img-fluid floater-img" style=" position: relative; background-color: purple; height: 635px;">
         <p style="background-color: black;"></p>
      </div>
      <div class="spotlight">
      </div>

      <div class="search-props" style="position: absolute; width: 80%; right: 20%; left: 10%; bottom: 10%; margin: 0 auto;">
          <div class="npl-heading" style="text-align: center; padding-bottom: 10px;">
      <h1 >Welcome to Nigeria Property Link</h1>

<h2>      An innovative real estate website that links you with </br>
all your needs</h2>
          </div>
          <div class="search-container bg-white" style=" width: 80%; margin: 0 auto;  background-color: whitesmoke;">
            <div class="search-home">
                <div class="container">
          <form class="form-inline" onsubmit="onSubmitAction()" id="searchs"  method="POST" action="search.php">
          <div class="form-row">
              <div class="form-group form-edit col-sm-2">
          <label for="inputState">Bedrooms</label>
                            <select id="inputState" name="bedroom" class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>    
              </div>
              <div class="form-group form-edit col-sm-8"> 
                            <label for="inputState">Location</label>
                            <select id="selects"  name="location" class="form-control">
                             <option>Lekki</option>
                              <option>Victoria Island</option>
                              <option>Ikoyi</option>
                              <option>Lagos Island</option>
                              <option>Agungi</option>
                            </select>
              </div>
        </div>
        
        <div class="form-row">
                        <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Category</label>
                            <select id="rentType" name="category" class="form-control">
                            <option value="rent">rent</option>
                              <option value="sale">sell</option>
                              
                              <option>lease</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Type</label>
                            <select id="inputState" name="type" class="form-control">
                              <option>Flat</option>
                              <option>Shared Apartment</option>
                              <option>Office Space</option>
                              <option>duplex</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Min Price</label>
                            <select id="inputState" name="minPrice" class="form-control">
                              <option> 100000</option>
                              <option>150000</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Max Price</label>
                            <select id="inputState" name="maxPrice" class="form-control">
                              <option> 100000</option>
                              <option>150000</option>
                              <option>2000000</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2 ">
                            <button class="btn btn-secondary bgwhite button btn-block" name="search" type="submit">Search</button>
                          </div>
                    </div>
                    
        </form>
                </div>
            </div>

            
          </div>
          
      </div>

      <div class="list-property" style=" ">
                <div class="list-header" style="text-align: center;">
                    <h3>Latest Listed Properties</h3>
                </div>
                <div class="list-recents">
                <div class="row" style="display: flex; flex-flow: row wrap; justify-content: center; margin-left: 14px;">
                <div class="column">
                  <div class="card">
                    <img  src="img/photo-1597047084897-51e81819a499 (1) 1.png" height="250px"  alt="Jane" style="width:100%">
                    <div class="container">
                      <h2>2 bed duplex</h2>
                      <p class="title">220m</p>
                      <p>Lekki Lagos</p>
                      <p>

                      </p>
                        <p><button class="button">More Details</button></p>
                    </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <img src="img/bernard-hermant-KqOLr8OiQLU-unsplash 1.png" alt="Mike" height='250px'  style="width:100%">
                    <div class="container">
                      <h2>Complex</h2>
                      <p class="title">140m</p>
                      <p>Ikeja Lagos</p>
                      
                      <p><button class="button">More details</button></p>
                    </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <img src="img/bernard-hermant-M0k4llbRpHU-unsplash 1.png" alt="John" height="250px" style="width:100%">
                    <div class="container">
                      <h2>Town House</h2>
                      <p class="title">40m</p>
                      <p>Victoria Island </p>
                      <p></p>
                      <p><button class="button">More details</button></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <img src="img/photo-1523217582562-09d0def993a6 1.png" height="250px" alt="John" style="width:100%">
                    <div class="container">
                      <h2></h2>
                      <p class="title">studio</p>
                      <p>20m</p>
                      <p><insurance@ellcarandalan class="com">Ikoyi</insurance@ellcarandalan></p>
                      <p><button class="button">Contact</button></p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row" style="display: flex; flex-flow: row wrap; justify-content: center; margin-left: 14px;">
                <div class="column">
                  <div class="card">
                    <img  src="img/photo-1597047084897-51e81819a499 (1) 1.png" height="250px"  alt="Jane" style="width:100%">
                    <div class="container">
                      <h2>2 bed duplex</h2>
                      <p class="title">220m</p>
                      <p>Lekki Lagos</p>
                      <p>

                      </p>
                        <p><button class="button">More Details</button></p>
                    </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <img src="img/bernard-hermant-KqOLr8OiQLU-unsplash 1.png" alt="Mike" height='250px'  style="width:100%">
                    <div class="container">
                      <h2>Complex</h2>
                      <p class="title">140m</p>
                      <p>Ikeja Lagos</p>
                      
                      <p><button class="button">More details</button></p>
                    </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <img src="img/bernard-hermant-M0k4llbRpHU-unsplash 1.png" alt="John" height="250px" style="width:100%">
                    <div class="container">
                      <h2>Town House</h2>
                      <p class="title">40m</p>
                      <p>Victoria Island </p>
                      <p></p>
                      <p><button class="button">More details</button></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <img src="img/photo-1523217582562-09d0def993a6 1.png" height="250px" alt="John" style="width:100%">
                    <div class="container">
                      <h2></h2>
                      <p class="title">studio</p>
                      <p>20m</p>
                      <p><insurance@ellcarandalan class="com">Ikoyi</insurance@ellcarandalan></p>
                      <p><button class="button">Contact</button></p>
                    </div>
                  </div>
                </div>
            </div>
                </div>
            </div>
            <div class="footer fixed-bottom mt-auto">
              <div class="container">
            <div class="copyright"><p>Copyright  &copy;  2021 by Nigeria Property Link</p></div>
              </div>
    </div>
 
</div>

           


      
  </body>
</html>
