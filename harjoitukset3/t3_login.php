<?php
//If user has sent the form
if(isset($_GET['name']) && isset($_GET['password'])) {
    session_start();
    //user information as username, password pairs.
    $users = ["test" => "salasana", "muumipappa" => "vaapukkamehu", "Karl Franz" => "this action does not have my consent"];
    //Check if the given username exists as valid userID
    if(array_key_exists($_GET['name'], $users)) {
        //check if the given password matches users password.
        if($users[$_GET['name']] == $_GET['password']) {
            //login information was correct, set session variables
            $_SESSION['name'] = $_GET['name'];
            $_SESSION['money'] = 500;
            $_SESSION['bet'] = 100;
            //redirect to the game page
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 't3.php';
            header("Location: http://$host$uri/$extra?mode=0");
        }
    }
}
?>
<title>Tehtävä 3</title>
<h2>You need to login to play to the game!</h2>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="name" value="" required>Username<br>
    <input type="password" name="password" value="" required>Password<br>
    <input type="submit" value="Lähetä" name="painike">
</form>