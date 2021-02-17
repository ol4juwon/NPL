
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

<!-- auth0 -->
<script src="https://cdn.auth0.com/js/auth0/9.11/auth0.min.js"></script>

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

    <script type="text/javascript">
    $(document).ready(function(){
  var webAuth = new auth0.WebAuth({
    domain:       'broadview.us.auth0.com',
    clientID:     'gXs2kz7zyMpuswHUNm4pGByr7ffCvsy9',
    redirectUri: 'localhost:8888/callback.php'
  });

  $('#signup').click(function(e){
    e.preventDefault();
    webAuth.authorize();

  });
});
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
   <script>
  $(document).ready(function(){
   $("#selects").change(function(){
   var url =  $(this).children(":selected").text(); //get the selected option value
   console.log(url);
   switch (url) 
  {
   case "rent":
   $("#searchs").attr('action','rent.php');
   //changing action attribute of form to school.php
   break;
   case "sell":
   $("#searchs").attr('action','sale.php');
   break;
   default:
       $("#searchs").attr('action', '#');
   }
   }); 
 }); 

 function onSubmitAction(){
   var e = document.getElementById("rentType");

   var formaction = e.options[e.selectedIndex].value;
 }
 </script>

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
      </ul>
      <div class="d-flex">
         <button id="signup" class="btn btn-secondary" type="submit">Register/Sign In</button>
</div>
    </div>
  </div>
</div>