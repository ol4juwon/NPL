<!DOCTYPE html>
<html>
    <head>

    <?php
    include 'includes/request.php';
    include 'api/config/config.php';
    include 'config.php';

    ?>
        <meta charset="utf-8">
        <meta name="viewport" content=" width=device-width, initial-scale=1 ">
        <meta name="description" content="">
        <meta name="author" content="Ol4juwon">
        <meta name="company" content="Nigeria Property Link">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Nigeria Property Link::Requests</title>

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
              <a class="navbar-brand" href="#"><img src="" alt="Logo" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-1 mb-md-1">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sale.php">For Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="rent.php">For Rent</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="requests.php ">Requests</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <?php 
                    if(!isset($_SESSION['access_token'])){ 
                      echo '<a href="register.php" class="btn btn-grey btn-secondary" > Register/Sign In</a>';
                    }else{
                      echo '<img src="'.$_SESSION['user_image'].'"> <a href="logout.php" class="btn-secondary">Logout </a> ';
                    }
                  ?>  
                </form>
              </div>
            </div>
      </div>
      <div style="Position: absolute; background-color:whitesmoke; width:100%; margin: 0 auto; top:45px; height : fit-content; padding:10px;">
        <div style="position:relative ; margin:0 auto; width: 90%; text-align:left;">
        <h1>Create a request </h1>
      </div>
        <div  style="width: 90%; margin:0 auto;">
        <form class="form-inline"  method="POST" action="">
          <div class="form-row">
              
              <div class="form-group form-edit col-sm-12"> 
                            <label for="inputState">Location</label>
                            <select id="inputState" name="location" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                              <option>Lekki</option>
                              <option>Victoria Island</option>
                              <option>Ikoyi</option>
                              <option>Lagos Island</option>
                              <option>Agungi</option>
                            </select>
              </div>
        </div>

        <div class="form-row">
                        <div class="form-group form-edit col-sm-3">
                            <label for="inputState">Bedrooms</label>
                            <select id="inputState" name="bedroom" class="form-control" required>
                            <option disabled selected>Select an option</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Property type</label>
                            <select id="inputState" name="type" class="form-control" required>
                            <option disabled selected>Select an option</option>
                              <option>Flat</option>
                              <option>Shared Apartment</option>
                              <option>Office Space</option>
                              <option>duplex</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Min Price</label>
                            <select id="inputState" name="minPrice" class="form-control" required>
                            <option disabled selected>Select an option</option>
                              <option>150000</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Max Price</label>
                            <select id="inputState" name="maxPrice" class="form-control" required>
                            <option disabled selected>Select an option</option>
                              <option>2000000</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Lease type</label>
                            <select id="inputState" name="category" class="form-control" required>
                            <option disabled selected>Select an option</option>
                              <option>Rent</option>
                              <option>Sell</option>
                              <option>Lease</option>
                              <option>Others</option>
                            </select>
                          </div>
            </div>
            <div class="form-row">
              <div class="form-group form-edit col-sm-3">
                <label for="name">Full names</label>
                <input class="form-control" type="text" name="name" required>
              </div>
              <div class="form-group form-edit col-sm-2">
                <label for="name">Phone Number</label>
                <input type="tel" class="form-control" name="phone"  required>  
              </div>
              <div class="form-group form-edit col-sm-2">
                <label for="name">Email</label>
                <!-- <i class="fa fa-envelope icon"></i> -->
                <input class="form-control fa fa-envelope icon" type="email" name="email" required >
              </div>
            </div>
            <div class="form-row">
              <div class="form-group form-edit col-sm-12">
              <label for="comments">Comments</label>
                <textarea class="form-control" rows="10" name="comments" required ></textarea>
                
              </div>
              <div class="d-flex form-group form-edit col-sm-2 px-3 " style="text-align: left; margin-left:10px; " >
                            <button class="btn btn-secondary bgwhite button btn-block" name="submit" type="submit">Submit Request</button>
                          </div>
            </div>
                   
                    

          </form>
        </div>
      </div>



    </body>
</html><?php
if(isset($_POST['submit'])){


$tg =  create_request($_POST,$conn);
echo $tg;
echo "<script>alert('$tg');</script>"; 

    }

   
    ?>