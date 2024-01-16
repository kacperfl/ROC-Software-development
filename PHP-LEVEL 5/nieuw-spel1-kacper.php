
<?php
#dit zijn de informatie om tot de database te komen 
$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";
#Hier wordt de connectie gemaakt met database
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$title = "Mario";
$uitgever = "Nintendo";
$platform = "Nintendo";
$price = "29,99";
$stock = "144";

$sql = "INSERT INTO producten (titel, uitgever, platform, prijs, voorraad) VALUES (:title, :uitgever, :platform, :price, :stock)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':uitgever', $uitgever);
$stmt->bindParam(':platform', $platform);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':stock', $stock);
$stmt->execute();


?>