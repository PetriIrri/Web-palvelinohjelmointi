<?php
//if form is already sent check what the background color is
$color = isset($_GET['color']) ? $_GET['color'] : '#fff';
?>
<style type="text/css">
body {
    background-color: <?php echo $color;?>;
}
</style>
<title>Tehtävä 2</title>

<h2>Pick a color!</h2>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="radio" id="pink" value="#fc03db" name="color" 
    <?php if($color == "#fc03db") echo "checked";  ?>>
    <label for="pink">Pink</label></br>
    <input type="radio" id="orange" value="#ffae00" name="color"
    <?php if($color == "#ffae00") echo "checked";  ?>>
    <label for="orange">Orange</label></br>
    <input type="radio" id="blue" value="#00fff7" name="color"
    <?php if($color == "#00fff7") echo "checked";  ?>>
    <label for="blue">Sky blue</label></br>
    <input type="radio" id="ocean" value="#0b009e" name="color"
    <?php if($color == "#0b009e") echo "checked";  ?>>
    <label for="ocean">Deep ocean</label></br>
    <input type="radio" id="danger" value="#ff0000" name="color"
    <?php if($color == "#ff0000") echo "checked";  ?>>
    <label for="danger">Red</label></br>

    <br><br>

    <input type="submit" name="painike" value="Lähetä">
</form>