<title>Tehtävä 2</title>
<link rel="stylesheet" href="t2.css" type="text/css">
<div id='container'>
<?php include('t2_navbar.php');?>

<h2>ShoppingCartMart shopping cart</h2>


<div class="boxi">

<p>Add a car to the cart by clicking the picture!</p>

<img src="./img/bananaCar.jpg" width="300px">
<?php
//echo the amount of cars in cart if session variable exists
if(isset($_COOKIE['banana'])) {
    echo "<p>You have " . $_COOKIE['banana'] . " banana cars in your cart!</p>";
} else {
    echo "<p>you have not yet put anything to the cart.</p>";
}
?>
<br>
<img src="./img/car.jpg" width="300px">
<?php
if(isset($_COOKIE['car'])) {
    echo "<p>You have " . $_COOKIE['car'] . " cars in your cart!</p>";
} else {
    echo "<p>you have not yet put anything to the cart.</p>";
}
?>
<a href="./t2_clear.php">Clear cart</a>


</div>

</div>