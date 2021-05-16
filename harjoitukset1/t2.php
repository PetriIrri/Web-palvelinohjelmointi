<!DOCTYPE html>
<html>

<head>
    <title>T2</title>
</head>

<body>
    <?php
    $markka = 0;
    $eur = 0;
    if (isset($_GET['painike'])) { //if the form is already sent
        $eur = $_GET['eur']; //get users eur from GET
        $markka = $eur * 5.94573; //calculate the value change to finnish mark
    }
    ?>
    <h1>Muunna eurosi markoiksi!</h1>
    <p>Minä kerron kuinka monta markkaa laittamasi eurosumma olisi!</p>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
        <p>Eurosi:</p>
        <input type="number" name="eur" value="<?php echo $eur ?>"><br>
        <input type="submit" value="Lähetä" name="painike">
    </form>

    <p>Eurosi markoissa on <?php echo $markka ?> markkaa.</p>
</body>

</html>