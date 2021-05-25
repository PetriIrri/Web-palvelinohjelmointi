<?php
session_start();

//unset all session variables
session_unset();
//redirect to main page
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 't1.php';
header("Location: http://$host$uri/$extra");