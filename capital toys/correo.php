<?php
require ("servidor.php");
require("class.phpmailer.php");
require("class.smtp.php");
require ("postman.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require ("vendor/autoload.php");


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Capital_Toys@outlook.com';                     //SMTP username
    $mail->Password   = 'ponle_contrasella';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('Capital_Toys@outlook.com', 'Capital Toys');
    $mail->addAddress("$email", "$nombre");     //Add a recipient




    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto de suma importancia';
    $mail->Body    = 'Correo recibido exitosamente';


    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Isra la cagaste en algo: {$mail->ErrorInfo}";
}
?>