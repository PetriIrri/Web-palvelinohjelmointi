<?php $errMsg = save_form(); ?>


<title>cbook-save.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo $errMsg;?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  Tallennetaan tiedot  ********************/
function save_form() {

    require_once("../../db-config/customerDb.php");
    $customerObj = new CustomersDb();

    $errMsg = '';
    $success = 0;

    // Datan vastaanotto
    $name       = isset($_POST['name'])       ? $_POST['name']       : '';
    $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';

    // Alkeellista tarkistusta lisäystä varten
    if (strlen($name)>=1 AND strlen($birth_date)>=1) {
        $success = $customerObj->addCustomer($name, $birth_date);
    }

    if ($success) {
        header("Location: http://" . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/'
        . "cbook-list.php");
    } else {
        $errMsg = "<p>Tallentamisessa jotain ongelmaa</p>";
        return $errMsg;
    }


}
