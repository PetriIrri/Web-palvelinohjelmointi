<title>cbook-ipdate.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo update_form();?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  update lomake  ********************/
function update_form() {

    $id = $_GET['id'];
    $name = $_GET['name'];
    $birth = $_GET['birth'];
    $form = <<<EndOfForm
    <h3>Päivitä tietoja</h3>

    <div class="boxi">
    <form action="cbook-update.php" method="post">
       Nimi<br>
      <input type="text" name="name" value="$name"><br>
      Syntymäpäivä<br>
      <input type="text" name="birth_date" value="$birth"><br>
      <input type="hidden" name="id" value="$id"><br><br>
      <input type="submit" name="nappi" value="Muokkaa">
    </form>
    <form action="cbook-delete.php" method="post">
      <input type="hidden" name="id" value="$id"><br><br>
      <input type="submit" name="nappi" value="Poista">
    </form>
    </div>
EndOfForm;

    return $form;
}
