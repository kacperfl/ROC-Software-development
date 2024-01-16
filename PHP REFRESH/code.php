<?php

$servername = "localhost";
$database = "winkel";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);



if(isset($_POST['submit'])) {
    $Voornaam = $_POST['Voornaam'];
    $Achternaam = $_POST['Achternaam'];
    $Woonplaats = $_POST['Woonplaats'];

    $query = "INSERT INTO klanten (Voornaam , Achternaam , Woonplaats) VALUE(:Voornaam, :Achternaam, :Woonplaats)";
    $query_run = $conn->prepare($query);


    $data = [
        ':Voornaam' => $Voornaam,
        ':Achternaam' => $Achternaam,
        ':Woonplaats' => $Woonplaats,
    ];
    $query_execute = $query_run->execute($data);

}

?>