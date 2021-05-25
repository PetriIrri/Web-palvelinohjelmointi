<?php
//Check what we are adding to the shopping cart
if ($_GET['id'] == "banana") {
    //check if the session variable is set
    if(!isset($_COOKIE['banana'])) setcookie("banana", 1);
    else $_COOKIE['banana']++;
} elseif ($_GET['id'] == "car") {
    if(!isset($_SESSION['car'])) setcookie("car", 1);
    else $_COOKIE['car']++;
}
//redirect to main page
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 't2.php';
header("Location: http://$host$uri/$extra");