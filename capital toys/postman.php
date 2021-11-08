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
?>