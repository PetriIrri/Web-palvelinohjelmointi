<?php

//if form is sent check how many times it has been sent
$count = (isset($_GET['count'])) ? $_GET['count']: 0;
$msg = '';
if($count == 1) $msg = 'First push of a button!';
elseif($count == 2) $msg = 'Second push of a button!';
elseif($count == 3) {
    $msg = 'Third push of a button!';
    //Start over!
    $count = -1;
}
else $count = 0;
$count++;
?>

<title>Tehtävä 4</title>

<h2>This button is crayzy!</h2>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="textfield" value="<?php echo $msg; ?>">
    <br><br>
    <input type="hidden" name="count" value="<?php echo $count; ?>">
    <input type="submit" name="submit" value="Send">
</form>