<?php

require("enlaze.php");
require("class.phpmailer.php");
require ("postman.php");
$mail = new PHPMailer();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require ("vendor/autoload.php");


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'correo que quieren que mande los mails';                     //SMTP username
    $mail->Password   = 'contraseña del correo';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('correo que quieren que mande los mails', 'nombre de su empresa');
    $mail->addAddress("$correo", "$nombre");     //Add a recipient




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