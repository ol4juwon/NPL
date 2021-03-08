<?php
require "vendor/autoload.php";
include 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ol4juwon">
    <title>Nigeria Property Link::</title>
    <link href="kmk.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">



  @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
        unicode-range: U + 0460-052F, U + 1C80-1C88, U + 20B4, U + 2DE0-2DFF, U + A640-A69F, U + FE2E-FE2F;
    }</style>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
 
  </head>
  <body>
    <div class="content">
      <div class="">
        <div class="navbar nav-shad navbar-light navbar-expand-md ">
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
        </div>
      <div class="search-home">
      <div class="welcome">
        
       <h1>Welcome To Nigeria Property Link</h1>
       <h2>An innovative real estate website that links you with </br>all your real estate needs</h2>
      
        <div class="container">
          <form class="form-control form-inline" method="POST" action="search.php">
            <legend>Search your dream apartment</legend>
            <div class="form-row">
              <div class="form-group form-edit col-sm-6"> 
                <label for="inputState">Location</label>
                <select id="selects"  name="location" class="form-control">
                 <option>Lekki</option>
                  <option>Victoria Island</option>
                  <option>Ikoyi</option>
                  <option>Lagos Island</option>
                  <option>Agungi</option>
                </select>
  </div>
              <div class="form-group form-edit col-sm-4 "> 
                <label for="bedrooms">Number of bedrooms</label>
                <select name="bedrooms" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
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
                  <div class="form-group form-edit col-sm-3 ">
                    <button class="btn btn-secondary bgwhite button btn-block" name="search" type="submit">Search</button>
                  </div>
            </div>
          </form>
        </div>
        </div> <!-- welcome div -->
            <div class="search">
              
          </div>
        </div><!-- search-home-->
            <div class="latest">
             <div class="latest-h">
              <h3 class=" btn btn-dark " style="text-align:center; margin: 0 auto;">Latest Listed Properties</h3>
              </div>
                <div class="con-container">
                <div class="columns">
                  <div class="card">
                    <img src="img/photo-1523217582562-09d0def993a6 1.png" width="250px" height="300px">
                  </div>
                  <div class="container"></div>
                </div>
                <div class="columns">
                  <div class="card">
                    <img src="img/photo-1597047084897-51e81819a499 (1) 1.png" width="250px" height="300px">
                  </div>
                  <div class="container"></div>
                </div>
                <div class="columns">
                  <div class="card">
                    <img src="agents/uploads/76109618.jpg" width="250px" height="300px">
                </div>
                <div class="container"></div>
                </div>
                <div class="columns">
                  <div class="card">
                  
                    <img src="agents/uploads/76109618.jpg" width="250px" height="300px">
                  </div>
                  <div class="container">
                </div>
              </div>
              <div class="columns">
                <div class="card">
                  <img src="img/photo-1523217582562-09d0def993a6 1.png" width="250px" height="300px">
                </div>
                <div class="container"></div>
              </div>
              <div class="columns">
                <div class="card">
                  <img src="img/photo-1597047084897-51e81819a499 (1) 1.png" width="250px" height="300px">
                </div>
                <div class="container"></div>
              </div>
              <div class="columns">
                <div class="card">
                  <img src="agents/uploads/76109618.jpg" width="250px" height="300px">
              </div>
              <div class="container"></div>
              </div>
              <div class="columns">
                <div class="card">
                
                  <img src="agents/uploads/76109618.jpg" width="250px" height="300px">
                </div>
                <div class="container">
              </div>
            </div>
              </div>

              <div class="btn btn-lg btn-link btn-outline-dark link-secondary" style="width: fit-content; margin:0 auto; padding: 10px; margin-bottom: 5px ;" >View All</div>


            </div>
            
            <div class="footer"  >
              <div class="footer-links">
                Services<br/>
                <a class="link-light" href="">Home</a><br/>
                <a class="link-light" href=""  >For Rent</a><br/>
                <a class="link-light" href="">For Lease</a></br>
                <a class="link-light" href="">Request</a>
                <a class="link-light" href="">For Sale</a><br/>
              </div>
              <div class="footer-links">
                Account<br/>
                <a class="link-light" href="">Register</a><br/>
                <a class="link-light" href="">Sign Up</a><br/>
                <a class="link-light" href="">Log in</a><br/>
                <a class="link-light" href="">Reset Password</a>
              </div>
              <div class="footer-links">
                Terms<br/>
                <a class="link-light" href="">Terms And Conditions</a><br/>
                <a class="link-light" href="">Privacy Policy</a><br/>
                <a class="link-light" href="">Cookies</a><br/>
              </div>
              <div class="footer-links">Developers</div>
            </div>
    </div>

  </body>
</html>