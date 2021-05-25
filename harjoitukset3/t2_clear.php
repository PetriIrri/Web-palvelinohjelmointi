<?php

//Delete cookies
setcookie("banana", "", time() - 3600);
setcookie("car", "", time() - 3600);
//redirect to main page
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 't1.php';
header("Location: http://$host$uri/$extra");