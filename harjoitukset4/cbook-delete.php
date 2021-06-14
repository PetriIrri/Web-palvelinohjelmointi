<?php $errMsg = delete_form(); ?>

<title>cbook-delete.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo $errMsg;?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  Tallennetaan tiedot  ********************/
function delete_form() {

    require_once("../../db-config/customerDb.php");
    $customerObj = new CustomersDb();

    $errMsg = '';
    $success = 0;

    // Datan vastaanotto
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $success = $customerObj->deleteCustomer($id, $name, $birth_date);
    }
    if ($success) {
        header("Location: http://" . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/'
        . "cbook-list.php");
    } else {
        $errMsg = "<p>Päivittämisessä jotain ongelmaa</p>";
        return $errMsg . $id . $name . $birth_date ;
    }

}
