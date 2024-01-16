<?php

$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$title = "Space legends";
$uitgever = "Ultimate industries";
$platform = "PC";
$price = "10.99";
$stock = "100";

$sql = "INSERT INTO producten (titel, uitgever, platform, prijs, voorraad) VALUES (:title, :uitgever, :platform, :price, :stock)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':uitgever', $uitgever);
$stmt->bindParam(':platform', $platform);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':stock', $stock);
$stmt->execute();


?>