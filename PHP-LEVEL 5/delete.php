
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $database = "winkel";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  
    $sqlKlanten = "DELETE FROM klanten WHERE klant_id = $id";
    $isDeleted = $conn->exec($sqlKlanten);

    if ($isDeleted !== false) {
        echo "De rij met ID $id is succesvol verwijderd.";
        header( "refresh:2;url=opdracht-c2-kacper.php" );
    } else {
        echo "Er is iets misgegaan bij het verwijderen van de rij met ID $id.";
    }
}
?>
