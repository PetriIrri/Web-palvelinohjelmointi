<?php
session_start();
?>
<title>Tehtävä 1</title>
<link rel="stylesheet" href="t1.css" type="text/css">
<div id='container'>
<?php include('t1_navbar.php');?>

<h2>ShoppingCartMart</h2>


<div class="boxi" background-color="blue">

<p>Add a car to the cart by clicking the picture!</p>

<a href="./t1_add.php?id=banana"><img src="./img/bananaCar.jpg" width="300px"></a></br>
<a href="./t1_add.php?id=car"><img src="./img/car.jpg" width="300px"></a></br>


</div>

</div>