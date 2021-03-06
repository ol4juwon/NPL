<?php
require 'cl/src/Cloudinary.php';
require ''
use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;


//use Cloudinary\Configuration\Configuration;
// Configuration::instance([
//   'cloud' => [
//     'cloud_name' => 'my_cloud_name', 
//     'api_key' => 'my_key', 
//     'api_secret' => 'my_secret'],
//   'url' => [
//     'secure' => true]]);

    $config = Configuration::instance();
    $config->cloud->cloudName = 'ol4juwon';
    $config->cloud->apiKey = '619781942963636';
    $config->cloud->apiSecret = '8ZuIWrywiz5m6_6mLq_AYuHDeUo';
    $config->url->secure = true;
    ?>