<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content=" width=device-width, initial-scale=1 ">
        <meta name="description" content="">
        <meta name="author" content="Ol4juwon">
        <meta name="company" content="Nigeria Property Link">
        <title> Nigeria Property Link::For sale</title>

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
                    <a class="nav-link"  href="index.php">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="sale.php">For Sale</a>
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
                </ul>
                <form class="d-flex">
                   <button class="btn btn-secondary" type="submit">Register/Sign In</button>
                </form>
              </div> <!-- collapse-->
      </div><!-- container fluid-->
        </div><!--  navbar ends  -->
          <div class="seak-cr"> 
            <div class="sale-search">
              <div class="sale-container-s">
              <form class="form-inline"  method="get" action="includes/search.php">
          <div class="form-row">
              
              <div class="form-group form-edit col-sm-10"> 
                            <label for="inputState">Location</label>
                            <select id="inputState" name="location" class="form-control">
                              <option selected>Choose...</option>
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
                            <label for="inputState">Bedrooms</label>
                            <select id="inputState" name="category" class="form-control">
                              <option selected>Choose...</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Type</label>
                            <select id="inputState" name="type" class="form-control">
                              <option selected>Choose...</option>
                              <option>Flat</option>
                              <option>Shared Apartment</option>
                              <option>Office Space</option>
                              <option>duplex</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Min Price</label>
                            <select id="inputState" name="minPrice" class="form-control">
                              <option selected>Choose...</option>
                              <option>150000</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2">
                            <label for="inputState">Max Price</label>
                            <select id="inputState" name="maxPrice" class="form-control">
                              <option selected>Choose...</option>
                              <option>2000000</option>
                            </select>
                          </div>
                          <div class="form-group form-edit col-sm-2 px-3 ">
                            <button class="btn btn-secondary bgwhite button btn-block" name="search" type="submit">Search</button>
                          </div>
                    </div>
                    
              </form>
            </div>
              

          </div><!-- Sale search div ends -->
          <div class="search-cont">
           <!-- search result card  -->
        <div class="search-card">
    <div class="search-img">
        <img src="" alt="pic" width="100%" height="100%">

    </div>
    <div class="search-prop-text">
        <div class="prop-head">
        <h2> Title</h2>
        <h4> location</h4>
        </div>
        <div class="prop-text">
            <p>
              this is a fully furnished proprty in ikoyi , lagos nigeria.
            </p>
            <button>Beds</button>
            <button>bath</button>
            <button>Toilet</button>
            <p>updated on</p>
            <p class="d-flex"><a href="#">More Details -></a> </p>
        </div>

    </div>
        </div><!-- search result card </div> -->
        
        
          </div>
          
        </div><!-- seak-cr ends -->
        


  </body>
</html>