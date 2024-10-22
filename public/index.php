<?php

require "../app/core/init.php";

// Absolute path moved to config.php
// define('ROOT', 'http://localhost/dwwmblog0_php/public');

// If a webserver: route path
// define('ROOT', 'http://mywebsite.com');


        // ROUTING SYSTEM

// If there's nothing in the url after public we'll get 'home'
$url = $_GET['url'] ?? 'home';

// Explode creates an array with individual items seperated (0 => item, 1=> item, 2=>item)
$url = explode("/", $url);

// Look for the first item of the Array and trim to remove trailing & leading spaces
$page_name = trim($url[0]);

// Construct a file & concatenate the page name to add .php (because we are looking for a php file)
$filename = "../app/pages/".$page_name.".php";

// Check if file exists
if(file_exists($filename))
{
    require_once $filename;
}else
{
    require_once "../app/pages/404.php";
}
//  /ROUTING SYSTEM

//echo "<pre>";
//echo $filename;
//print_r($url);
