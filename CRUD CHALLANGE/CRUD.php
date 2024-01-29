<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>PDO CRUD Challange</title>

</head>

<body style="margin: 50px;">
<!-- <div class="col-md-8 mt-4">
        <div class="card">
            <div class="card-header"> -->
                <h3>PDO CRUD Challange </h3>
                
<a class='btn btn-primary float-end' href="CRUD-voeg.php?" >Weer eentje te laat</a>

     <table class="table">
        <thread>

            <?php
           
          
            
            $servername = "localhost";
                $database = "crud challange";
                $username = "root";
                $password = "";
            
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

                
    $sqlStudent = "SELECT * FROM student";
    $alleStudent = $conn->query($sqlStudent);
    $rows = $alleStudent->fetchAll();


    echo "<th>Naam Student</th>";
    echo "<th>Klas</th>";
    echo "<th>Minuten te laat</th>";
    echo "<th>Reden te laat</th>";
    

    foreach($rows as $row){
        echo "<tr>
    <td>" . $row["student_naam"] . "</td>
    <td>" . $row["klas"] . "</td>
    <td>" . $row["minuten_te_laat"] . "</td>
    <td>" . $row["reden_te_laat"] . "</td>
    <td>

        <a class='btn btn-primary' href='CRUD-update.php?id=" . $row['id'] . "'>Update</a>
    </td>
    <td>
        <a class='btn btn-danger' href='CRUD-delete.php?id=" . $row['id'] . "'>Verwijder</a>
    </td>

</tr>";

    }
    
  ?>

<?php

$servername = "localhost";
$database = "crud challange";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


$sql = "SELECT MAX(minuten_te_laat) AS hoogste_aantal_minuten_te_laat,
               AVG(minuten_te_laat) AS gemiddeld_aantal_minuten,
               SUM(minuten_te_laat) AS totaal_aantal_minuten
        FROM student";
$result = $conn->query($sql);
$row = $result->fetch();


echo "<table class='table table-striped'>
        <thead>
            <tr>
                <th rowspan='2'>Statistieken</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hoogste aantal minuten te laat</td>
                <td>" . $row['hoogste_aantal_minuten_te_laat'] . "</td>
            </tr>
            <tr>
                <td>Gemiddeld aantal minuten</td>
                <td>" . round($row['gemiddeld_aantal_minuten'], 2) . "</td>
            </tr>
            <tr>
                <td>Totaal aantal minuten</td>
                <td>" . $row['totaal_aantal_minuten'] . "</td>
            </tr>
        </tbody>
    </table>";
?>
</body>
</html>