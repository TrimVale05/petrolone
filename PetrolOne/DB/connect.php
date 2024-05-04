<!-- file connect.php -->
<?php

$servername = "localhost";
$username = "root";
$password = "";  //su pc windows la password è vuota
$nomeDB = "petrolone";

// Create connection
$conn = new mysqli($servername, $username, $password, $nomeDB);

// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

echo "Connected successfully";

?>