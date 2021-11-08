<?php

require ("servidor.php");

$nombre = "";
$apellidos = "";
$email = "";
$contrasena = "";
$ciudad ="";
$pais ="";
$telefono = "";

if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
}

if(isset($_POST["apellidos"])){
    $apellidos = $_POST["apellidos"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}

if(isset($_POST["contrasena"])){
    $contrasena = $_POST["contrasena"];
}

if(isset($_POST["ciudad"])){
    $ciudad = $_POST["ciudad"];
}
if(isset($_POST["pais"])){
    $pais = $_POST["pais"];
}

if(isset($_POST["telefono"])){
    $telefono = $_POST["telefono"];
}



$sql = "INSERT INTO usuario (Nombre, Apellidos, Email,Contrasena,Ciudad,Pais,Telefono) VALUES ('$nombre','$apellidos','$email','$contrasena','$ciudad','$pais','$telefono')";
if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

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
    $mail->Subject = 'Registro de cuenta exitoso';
    $mail->Body    = 'Estimado usuario se le informa que el registro de su cuenta ha sido exitoso';


    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>