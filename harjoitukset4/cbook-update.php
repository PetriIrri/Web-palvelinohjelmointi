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

    $id = $_POST['id'];
    $name = $_POST['name'];
    $birth_date = $_POST['birth_date'];

    // Datan vastaanotto
    if (isset($_POST['id']) && isset($_POST['name'])  && isset($_POST['birth_date'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $birth_date = $_POST['birth_date'];
        
        $success = $customerObj->updateCustomer($id, $name, $birth_date);
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
