<?php

$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$title = $_POST['Titel'];
$uitgever = $_POST['Uitgever'];
$platform = $_POST['Platform'];
$price = $_POST['Price'];
$stock = $_POST['Stock'];

$sql = "INSERT INTO producten (titel, uitgever, platform, prijs, voorraad) VALUES (:title, :uitgever, :platform, :price, :stock)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':uitgever', $uitgever);
$stmt->bindParam(':platform', $platform);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':stock', $stock);
$stmt->execute();


?>