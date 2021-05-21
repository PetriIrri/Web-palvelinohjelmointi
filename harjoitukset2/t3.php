<?php
//initialize the variables 
$games = FALSE;
$movies = FALSE;
$tetris = FALSE;
//if form is already sent check what options were selected
if(isset($_GET['links'])) {
    //Loop through all the sent links
    foreach ($_GET['links'] as $link) {
        //Check if link is one of our content areas
        if($link == "games") $games = TRUE;
        if($link == "movies") $movies = TRUE;
        if($link == "tetris") $tetris = TRUE;
    }
}

//make contents using heredoc
$gamesContent = <<< EOgames
<h3>So you like video games? Check these links!</h3>
<a href="https://store.playstation.com/en-us/product/UP1747-CUSA07311_00-BLACKTIGER000001">Life of black tiger</a><br>
<a href="https://www.ea.com/en-gb/games/black?setLocale=en-gb">A classic!</a>
EOgames;
$moviesContent = <<< EOmovies
<h3>So you like movies? Check these links!</h3>
<a href="https://www.imdb.com/title/tt5697572/">Your favourite movie?</a><br>
<a href="https://www.imdb.com/title/tt0368259/">You might like this... or not. Probably not.</a>
EOmovies;
$tetrisContent = <<< EOtetris
<h3>So you like Tetris? Check these links!</h3>
<a href="https://www.speedrun.com/tetrisnes">You probably are not as fast as these guys.</a><br>
<a href="https://thectwc.com/">You can try competing.</a>
EOtetris;
?>

<title>Tehtävä 3</title>

<h2>What links would you like to see?</h2>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="links">Choose a link:</label></br>

    <select name="links[]" id="links" multiple>
        <option value="games">Games</option>
        <option value="movies">Movies</option>
        <option value="tetris">Tetris</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Send">
</form>

<?php
//print the content based on what the user has chosen
if($games) echo $gamesContent;
if($movies) echo $moviesContent;
if($tetris) echo $tetrisContent;
?>