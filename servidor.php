<?php

$servername = "localhost";
$database = "capital_datos";
$username = "root";
$password = "";
//create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//check connection
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

echo "Connected successfully";






?>
