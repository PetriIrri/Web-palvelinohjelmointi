<!DOCTYPE html>
<html>

<head>
    <title>T1</title>
</head>

<body>
    <?php
    $weigth = $_POST['weight']; //get weight from post
    echo "Painosi on: {$weigth}kg </br>";
    echo "minun painoni on ", ($weigth - 5), "kg, onkohan sinulla paino-ongelmia?";
    ?>
</body>

</html>