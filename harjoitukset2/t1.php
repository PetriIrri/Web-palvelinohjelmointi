<?php
//Check what quotes user wants to see if form is already sent
$quote1 = isset($_GET['quote1']) ? TRUE : FALSE;
$quote2 = isset($_GET['quote2']) ? TRUE : FALSE;
$quote3 = isset($_GET['quote3']) ? TRUE : FALSE;
?>
<title>Tehtävä 1</title>

<h2>Get inspirational quotes!</h2>

<?php
//print the quotes that are TRUE
if($quote1) echo "<p>“Java is to JavaScript what car is to Carpet.” – Chris Heilmann</p>";
if($quote2) echo "<p>“Sometimes it pays to stay in bed on Monday, rather than spending the rest of the week debugging Monday’s code.” – Dan Salomon</p>";
if($quote3) echo "<p>“ Code is like humor. When you have to explain it, it’s bad.” – Cory House</p>";
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="checkbox" value="1" name="quote1" id="quote1" <?php if($quote1) echo "checked";?>>
<label for="quote1">Inspirational quote 1!</label></br>
<input type="checkbox" value="2" name="quote2" id="quote2" <?php if($quote2) echo "checked";?>>
<label for="quote2">Inspirational quote 2!</label></br>
<input type="checkbox" value="3" name="quote3" id="quote3" <?php if($quote3) echo "checked";?>>
<label for="quote3">Inspirational quote 3!</label></br>

<br><br>

<input type="submit" name="painike" value="Lähetä">
</form>
