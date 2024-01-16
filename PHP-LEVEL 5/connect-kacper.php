<?php


$servername ="localhost";
$database ="games";
$username ="root";
$password ="";

$conn1 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


$servername ="localhost";
$database ="artiesten";
$username ="roc-student";
$password ="welkom123";

$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

?>