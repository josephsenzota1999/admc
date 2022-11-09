<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'joegenes000@gmail.com';                     //SMTP username
    $mail->Password   = 'ccdyumnhdxrqugoi';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;      
    $mail->isHTML(true);                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('josephsenzota1999@gmail.com', 'AMDC-Application Request');
    $mail->addAddress('josephgenes1999@gmail.com', 'Joe User');     //Add a recipient
   
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    =  '<h2 style="color:#1061f0;font-weight:bold">Program Application Request</h2> 

                    <p><span style="color:#1061f0;font-size:14px;font-weight:bold">Name</span> &nbsp; &nbsp; &nbsp;<span style="font-size:12px">dfds</span></p>
                    
                    <button style="background-color:#1061f0;color:white;border:1px solid #1061f0;border-radius:5px;padding-top:10px;padding-bottom:10px;">View More</button>';
                    

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}