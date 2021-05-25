<?php
session_start();

//Check what we are adding to the shopping cart
if ($_GET['id'] == "banana") {
    //check if the session variable is set
    if(!isset($_SESSION['banana'])) $_SESSION['banana'] = 1;
    else $_SESSION['banana']++;
} elseif ($_GET['id'] == "car") {
    if(!isset($_SESSION['car'])) $_SESSION['car'] = 1;
    else $_SESSION['car']++;
}
//redirect to main page
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 't1.php';
header("Location: http://$host$uri/$extra");