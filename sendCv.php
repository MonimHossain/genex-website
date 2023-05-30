<?php



use PHPMailer\PHPMailer\PHPMailer;

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

        $mail->addAddress('monim.hossain@genexinfosys.com', 'Jobs');     // Add a recipient

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