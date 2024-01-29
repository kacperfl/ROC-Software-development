<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $database = "crud challange";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $sqlStudent = "DELETE FROM student WHERE id = $id";
    $isDeleted = $conn->exec($sqlStudent);

    if ($isDeleted !== false) {
        echo "De rij met ID $id is succesvol verwijderd.";
        header( "refresh:2;url=CRUD.php" );
    } else {
        echo "Er is iets misgegaan bij het verwijderen van de rij met ID $id.";
    }
}
?>
