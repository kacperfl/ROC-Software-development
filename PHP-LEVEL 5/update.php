<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Klant Updaten</title>
</head>
<body>

<?php
 require 'db-connectie.php';

 $id = $_GET['id'];


$stmt = $conn->prepare("SELECT woonplaats FROM klanten WHERE klant_id = :id");
$stmt->bindParam(':id', $id); 
$stmt->execute();
$results = $stmt->fetch();
$result = $results[0];
// echo $result."<br>";

if($result === "Amstelveen") {
    $updateBedum = $conn->prepare("UPDATE klanten SET woonplaats = 'Bedum' WHERE klant_id=:id");
    $updateBedum->bindParam(':id', $id); 
    $updateBedum->execute();
} else {
    $updateAmstelveen = $conn->prepare("UPDATE klanten SET woonplaats = 'Amstelveen' WHERE klant_id=:id");
    $updateAmstelveen->bindParam(':id', $id); 
    $updateAmstelveen->execute();
}




?>




    
</body>
</html>
