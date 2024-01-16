<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
include 'database-connectie-kacper.php';
    $servername = "localhost";
    $database = "winkel";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


    $sqlProducten = "SELECT * FROM producten";
    $alleProducten = $conn->query($sqlProducten);
    
?>
</body>
</html>