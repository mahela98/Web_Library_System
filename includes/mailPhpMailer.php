<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpMailer/Exception.php';
require 'phpMailer/SMTP.php';
require 'phpMailer/PHPMailer.php';
//Instantiation and passing `true` enables exceptions


function phpMailerSendMail($email,$vkey){
    
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;
    $mail->do_debug = 0;

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

  
    //Recipients
    $mail->setFrom("bookbrowser@gmail.com", 'Mailer');
    $mail->addAddress($email, 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'BOOK BROWSER Verification';
    $mail->Body    = "<a href = 'http://http://localhost/my_test/sem_chandima/verified.php?vkey=$vkey'>Register Account</a>
    </br>
     <h1> BOOK BROWSER </h1> 
     </br>
     <p> Your verification key :  $vkey </p>
     </br>
     <p> Thankyou ! </p>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    // header("location: ../thankyou-verification-page.php?error=signedin");
    echo '<script type="text/javascript">window.location = "../thankyou-verification-page.php?error=signedin"</script>';


} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("location: ../thankyou-verification-page.php?error=errorSendingmail");

}


}