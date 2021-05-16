<!DOCTYPE html>
<html>

<head>
    <title>T5</title>
</head>

<body>
    <h1>Värin vaihtelu!</h1>
    <p>Alla olevien elementtien taustaväri vaihtelee elementistä toiseen!</p>
    <?php
    $lines = array("eka","toka","kolmas","neljäs","viides","kuudes","seitsemäs");
    //print all lines
    for ($i = 0; $i < count($lines); $i++) {
        echo "<p style=background-color:". taustaVari() . ">" . $lines[$i] . "</p>";
    }
    ?>
    <h2>Nyt foreach lauseella</h2>
    <?php
    //print all lines
    foreach ($lines as $line) {
        echo "<p style=background-color:". taustaVari() . ">" . $line . "</p>";
    }

    function taustaVari() {
        static $color = 0;// Used with modulo to determine what background color is to be used
        $color ++;
        if ($color % 2 == 0) return "#ff0";
        else return "#fff";
    }
    ?>
</body>

</html>