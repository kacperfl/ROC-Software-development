<?php
<?php
$servername ="localhost";
$database ="winkel";
$username ="student";
$password ="welkom123";



$conn new PDO("mysql;host=$servername;dbname=$database", $username, $password);

$sql= "INSERT INTO games (Titel, Uitgever, Platform, Voorraad,Prijs)
Values( 'Mario', 'Nintendo', 133, '29,99,-')";

$conn ->exec($sql);







?>





?>