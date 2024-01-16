<?php

              
// connectie database

$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$sqlKlanten = "SELECT * FROM klanten";
            $alleKlanten = $conn->query($sqlKlanten);
            $rows = $alleKlanten->fetchAll();
?>
