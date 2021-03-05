<?php 
require("../api/config/config.php");
require('../config.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ol4juwon">
    <title>Nigeria Property Link::</title>

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="css/style.css">
 
<link type="text/css" rel="stylesheet" href="../css/image-uploader.css">
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
<link href="../css/bootstrap.css" rel="stylesheet">

<link href="../css/default.css" rel="stylesheet">

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

 $(document).ready(function(){
   $('input-images').imageUploader();
 });
 </script>
 <script>
 $(document).ready(function(){
    $('#upload_files').on('change',function(){
        $('#image_upload_form').ajaxForm({           
            target:'#images_preview',
            beforeSubmit:function(e){
                $('.image_uploading').show();
            },
            success:function(e){
                $('.image_uploading').hide();
            },
            error:function(e){
            }
        }).submit();
    });
});</script>
<link rel='stylessheet' href="../css/image-uploader.css">
<script type="text/javascript" src="../css/image-uploader.js"></script>
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
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../sale.php">For Sale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../rent.php">For Rent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../requests.php ">Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact.php">Contact Us</a>
        </li>
        <?php if(isset($_SESSION['user_first_name'])){ ?>
        <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="add_property.php">Add Property</a></li>
                    
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                  </ul>
                </li>
    <?php }?>
      </ul>
      <div class="d-flex">
      <?php
        if(!isset($_SESSION['user_first_name'])){ 
        echo '<a href="register.php" class="btn btn-grey btn-secondary" > Register/Sign In</a>';
        }else{
          echo '<img height="50px" style="border-radius:50%;" src="'.$_SESSION['user_image'].'"> ';
        }
        ?></div>
    </div>
  </div>
</div>
&nbsp;
<div class="content-container">
 <div>
 <h1>Add Property</h1>
 <form enctype="multipart/form-data" method="POST" id="image_upload_form" action="add_images.php" class=" form-inline" style="margin: 0 auto;">
 <div class="form-row">
 <div class="form-group form-edit col-sm-3">
 <label for="title">Property Title</label>
    <input type="text" placeholder="Property Title" required class="form-control" name="title" >
 </div>
 <div class="input-group form-edit form-group col-sm-3" style="padding: 2px;;">
 <!-- <label for="price">Price in Naira</label> -->
 <span class="input-group-text">$</span>
 <input type="number" placeholder="Price in NGN" required class="form-control" name="price">
 <span class="input-group-text">.00</span>
 </div>
 <div class="form-group form-edit col-sm-3">
        <label for="Location" >Pick a Locality</label> 
        <select class="form-control" aria-placeholder="Select a location" require name="location" >
        <option disabled selected >Select an option</option>
        <option>Lekki</option>
        <option>Victoria Island</option>
        </select>
 
 </div>
 
 </div>
 <div class="form-row">
 <div class="form-group form-edit col-sm-3">
 <label for="bedrooms">Bedrooms</label>
 <Select class="form-control" required name="bedrooms">
        <option disabled selected>Select number of bedrooms</option> 
        <option>1</option>
        <option>2</option>
 </Select>
 
 </div>
 <div class="form-group form-edit col-sm-3">
 <label for="bedrooms">Bathrooms</label>
 <Select class="form-control" required name="baths">
        <option disabled selected>Select number of bathrooms</option> 
        <option>1</option>
        <option>2</option>
 </Select>
 
 </div>
 <div class="form-group form-edit col-sm-3">
 <label for="bedrooms">Toilets</label>
 <Select class="form-control" required name="toilets">
        <option disabled selected>Select number of toilets</option> 
        <option>1</option>
        <option>2</option>
 </Select>
 
 </div>

 </div>
 <div class="form-row">
 <div class="form-group form-edit col-sm-3">
 <label for="bedrooms">Parking</label>
 <Select class="form-control" required name="park">
        <option disabled selected>Select number of car space</option> 
        <option>1</option>
        <option>2</option>
 </Select>
 
 </div>
 <div class="form-group form-edit col-sm-3">
 <label for="bedrooms">Serviced</label>
 <Select class="form-control" required name="serviced">
        <option disabled selected>Pick Yes/No</option> 
        <option>Yes</option>
        <option>No</option>
 </Select>
 </div>
 <div class="form-group form-edit col-sm-3">
 <label for="furnished">Furnished</label>
 <Select class="form-control" required name="furnished">
        <option disabled selected>Select Yes/NO</option> 
        <option>Yes</option>
        <option>No</option>
 </Select>
 
 </div>

 </div>
 <div class="form-row">
    <div class="form-group form-edit col-sm-9">
        <label for="description">Description</label>
        <textarea class="form-control" required name="description"></textarea>
    </div>
 </div>

 <div class="form-row">
    <div class="form-group form-edit col-sm-4" style="padding: 5px;">
    <input type="submit" class="form-control btn btn-large btn-danger" value="Next" name="addProp">
    </div>

 </div>
 <div class="form-row">
 <div id="images_preview"></div>
 </div>
 </form>


<script type="text/javascript" src="../css/image-uploader.js"></script>

 </div>
</div>