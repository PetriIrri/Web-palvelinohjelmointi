<?php
//The form has been sent. Show scores.
if(isset($_GET['q1'])) {
    $score = 0;
    //get all the answers from GET
    $answers = array_values($_GET);
    //Loop through the answers while ignoring last index. Last index has submit button value.
    for($i = 0; $i < count($_GET) - 1; $i++) {
        $score += $answers[$i];
    }
    echo "<h2>Your score is: $score! Congratulations!!</h2>";
    if($score >= 15) echo "<h1>You won a quid!</h1>";
}
//the form hasn't been sent yet. Show form
else {
?>
<title>Tehtävä 5</title>
<meta charset="UTF-8">


<h2>Would you like a quid?</h2>

<p>Answer all the questions correctly and <b>YOU</b> can get a <b>quid!</b></p>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h2>Q1: Many oranges are actually green.</h2>
    <input type="radio" name="q1" id="q1" value="1" required><label for="q1">Correct</label><br>
    <input type="radio" name="q1" id="q1.2" value="0"><label for="q1.2">Wrong</label><br>
    <input type="radio" name="q1" id="q1.3" value="0"><label for="q1.3">Maybe</label><br>
    </br>
    <h2>Q2: What can help ward off mosquitoes?</h2>
    <select name="q2" id="q2" reguired>
        <option value="-2">Eurovision</option>
        <option value="2">EDM</option>
        <option value="-2">Singing and dancing to the beat of TOTOs Africa</option>
    </select>
    <h2>Q3: Which of these you can't do in Arizona?</h2>
    <input type="checkbox" name="q3.1" id="q3.1" value="3"><label for="q3.1">You can't hunt camels</label><br>
    <input type="checkbox" name="q3.2" id="q3.2" value="3"><label for="q3.2">You may not disturb bullfrogs in Hayden,
        Arizona</label><br>
    <input type="checkbox" name="q3.3" id="q3.3" value="-3"><label for="q3.3">You may not distribute alcohol to
        donkeys</label><br>
    <h2>Q4: Which of these are true?</h2>
    <input type="checkbox" name="q4.1" id="q4.1" value="3"><label for="q4.1">Mulan has the highest kill count of any
        Disney character</label><br>
    <input type="checkbox" name="q4.2" id="q4.2" value="-3"><label for="q4.2">New jersey grows one-third of the worlds
        eggplants</label><br>
    <input type="checkbox" name="q4.3" id="q4.3" value="3"><label for="q4.3">More monopoly money is printed in a year
        than actual money</label><br>
    <input type="submit" name="submit">
</form>
<?php
}
?>