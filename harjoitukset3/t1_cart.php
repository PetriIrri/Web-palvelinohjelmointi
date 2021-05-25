<?php
session_start();
?>
<title>Tehtävä 1</title>
<link rel="stylesheet" href="t1.css" type="text/css">
<div id='container'>
<?php include('t1_navbar.php');?>

<h2>ShoppingCartMart shopping cart</h2>


<div class="boxi">

<p>Add a car to the cart by clicking the picture!</p>

<img src="./img/bananaCar.jpg" width="300px">
<?php
//echo the amount of cars in cart if session variable exists
if(isset($_SESSION['banana'])) {
    echo "<p>You have " . $_SESSION['banana'] . " banana cars in your cart!</p>";
} else {
    echo "<p>you have not yet put anything to the cart.</p>";
}
?>
<br>
<img src="./img/car.jpg" width="300px">
<?php
if(isset($_SESSION['car'])) {
    echo "<p>You have " . $_SESSION['car'] . " cars in your cart!</p>";
} else {
    echo "<p>you have not yet put anything to the cart.</p>";
}
?>
<a href="./t1_clear.php">Clear cart</a>


</div>

</div>