<title>cbook-list.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php page_content();?>
</div>

<?php
/*******************  PHP-toiminnot ******** ***********/

/***********  Datan hakeminen tietokannasta  ***********/
function page_content() {

    require_once("../../db-config/customerDb.php");
    $customerObj = new CustomersDb();
    $tyhja_hakusana = isset($_POST['searchterm']) ? $_POST['searchterm'] : '';
    echo "<h2>Listaa asiakkaat</h2>";
    $customers = $customerObj->getCustomers($tyhja_hakusana);

    if (count($customers)>=1) echo do_html_table($customers);
    //var_dump($customers); // ks. tarvittaessa
}

/***********  Asiakaslista HTML-taulukkona  ***********/
function do_html_table($customers) {
    $html = "<table>";

    // Otsikkorivi
    $html .= "<tr>";
    foreach ($customers[0] as $key => $value) {    
        if ($key != "id") {
            $html .=  "<th>" . ucfirst($key) . "</th>";
        }
    }
    $html .= "</tr>";

    // Tulosrivit
    foreach ($customers as $customer) {    
        $html .= "<tr>" .
                 "<td><a href=\"./cbook-updateform.php?id=$customer->id&name=$customer->name&birth=$customer->birth_date\">$customer->name</a></td>" .
                 "<td>$customer->birth_date</td>" .
                 "<td>$customer->created_at</td>" .
                 "</tr>";
    }
    $html .= "</table>";

    return $html;
}
