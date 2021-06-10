<title>Tehtävä 1</title>
<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>
<?php

// Main program
require_once('./autolaskuri.class.php');
session_start();
//create object
$autolaskuri = isset($_SESSION['object']) ? $_SESSION['object'] : new Autolaskuri();
$painike   = '';

if (isset($_POST['painike'])) {
   $painike  = $_POST['painike'];
}

$autolaskuri->laske_lkm($painike);
$autolaskuri->tee_lomake();
$autolaskuri->nayta_tulokset();

// Save object as session variable
$_SESSION['object'] = $autolaskuri;