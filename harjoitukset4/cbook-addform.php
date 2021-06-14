<title>cbook-addform.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo blank_form();?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  Tyhjä lomake  ********************/
function blank_form() {

    $form = <<<EndOfForm
    <h3>Lisää asiakas</h3>

    <div class="boxi">
    <form action="cbook-save.php" method="post">
       Nimi<br>
      <input type="text" name="name" placeholder="Sukunimi Etunimi"><br>
      Syntymäpäivä<br>
      <input type="text" name="birth_date" value="2011-11-11"><br><br>
      <input type="submit" name="nappi" value="Tallenna">
    </form>
    </div>
EndOfForm;

    return $form;
}
