<title>Tehtävä 3</title>
<?php
session_start();
$pic1 = 1;
$pic2 = 1;
$pic3 = 1;
//start game if session variables are found
if(isset($_SESSION['name']) && isset($_SESSION['money'])) {
    echo "<h2>Welcome to the game " . $_SESSION['name'] . "!</h2>";
    //if mode is play play the game
    if($_GET['mode'] == "play") {
        $pic1 = rand(1,3);
        $pic2 = rand(1,3);
        $pic3 = rand(1,3);
        //check if player got three same numbers
        if($pic1 == $pic2 && $pic2 == $pic3) {
            //player got a win. add bet * 2 to him
            $_SESSION['money'] += $_SESSION['bet'] * 2;
            echo "<h2>You won ". ($_SESSION['bet'] * 2) ."€</h2>";
        } else {
            //player lost deduct 100 money from him
            $_SESSION['money'] -= $_SESSION['bet'];
            echo "<h2>You lost " . $_SESSION['bet'] . "€</h2>";
        }
    //if mode is bet change the betting amount
    } elseif ($_GET['mode'] == "bet") {
        $_SESSION['bet'] = $_GET['bet'];
        echo "<h2>Changed betting amount to:" . $_SESSION['bet'] ."€</h2>";
    // if mode is add, add money to account
    } elseif ($_GET['mode'] == "add") {
        $_SESSION['money'] += $_GET['add'];
        echo "<h2>Added:" . $_GET['add'] ."€ to your account</h2>";
    } else {
        echo "<p>This seems to be your first time here. Here you can play the game, change betting amount or add money to your account. Have fun <b>" . $_SESSION['name'] ."!</b></p>";
    }
    echo "<p>You currently have " . $_SESSION['money'] . "€</p>";
    echo "<p>Your betting amount is currently: " . $_SESSION['bet'] . "€</p>";
?>
<img src="./img/<?php echo $pic1 ?>.png" alt="Kuva1" width="500" height="500">
<img src="./img/<?php echo $pic2 ?>.png" alt="Kuva2" width="500" height="500">
<img src="./img/<?php echo $pic3 ?>.png" alt="Kuva3" width="500" height="500"></br>
<a href="<?php echo $_SERVER['PHP_SELF'] . "?mode=play";?>"><button>Play</button></a>
<a href="./t3_logout.php"><button>Logout</button></a><br>

<h3>Change the amount you want to bet</h3>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="number" name="bet" value="<?php echo $_SESSION['bet'] ?>" >Betting amount
    <input type="hidden" name="mode" value="bet"><br>
    <input type="submit" value="Lähetä" name="painike">
</form>

<h3>Add money to your account</h3>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="number" name="add" value="<?php echo $_SESSION['bet'] ?>" >amount to add
    <input type="hidden" name="mode" value="add"><br>
    <input type="submit" value="Lähetä" name="painike">
</form>

<?php
} else {
    //redirect to the login page
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 't3_login.php';
    header("Location: http://$host$uri/$extra");
}