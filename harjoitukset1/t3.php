<!DOCTYPE html>
<html>

<head>
    <title>T3</title>
</head>

<body>
    <?php
    $star = 0;
    if (isset($_GET['painike'])) { //if the form is already sent
        $star = $_GET['star']; //get the amount of stars with GET
    }
    ?>
    <h1>Tulostetaan tähtiä!</h1>
    <p>Kerro kuinka monta tähteä haluat tulostettavan!</p>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>Tähdet:</p>
        <input type="number" name="star" value="<?php echo $star;?>"><br>
        <input type="submit" value="Lähetä" name="painike">
    </form>
    <h2>Tähtesi!</h2>
    <?php 
    printStars($star);
    //function that prints stars according to amount
    function printStars($amount) {
        for ($i = 0; $i < $amount; $i++) {
            echo "*";
        }
    }
    ?>
</body>

</html>