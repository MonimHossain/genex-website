<?php



    $comName = isset($_POST["companyName"]) ? $_POST["companyName"] : "";



    $msg = "Name: " . $_POST["name"] . "\n Email: ". $_POST["email"] . "Phone: ". $_POST["phone"]. "\n Company Name: " . $comName . "\n Enquiry: " . $_POST["enquiry"];



    $msg = wordwrap($msg, 70);





    // mail($_POST["genexEmail"],"Website Enquiry", $_POST["enquiry"]);



    mail("alihayder19@gmail.com","Website Enquiry", $msg);





?>