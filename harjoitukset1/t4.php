<!DOCTYPE html>
<html>

<head>
    <title>T4</title>
</head>

<body>
    <h1>Vaihtuvat kuvat!</h1>
    <p>Paina nappia ja kuvat vaihtuvat!</p>
    <img src="./img/<?php echo rand(1,3) ?>.png" alt="Kuva1" width="500" height="500">
    <img src="./img/<?php echo rand(1,3) ?>.png" alt="Kuva2" width="500" height="500">
    <img src="./img/<?php echo rand(1,3) ?>.png" alt="Kuva3" width="500" height="500"></br>
    <a href="<?php echo $_SERVER['PHP_SELF'];?>"><button>Refresh</button></a>
</body>

</html>