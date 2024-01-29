<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


 <?php
$servername = "localhost";
$database = "crud challange";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


if(isset($_GET['id'])) {
   
    $id = $_GET['id'];

    $sql = "SELECT student_naam, klas, minuten_te_laat, reden_te_laat FROM student WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
      $row = $result->fetchAll();
      $student_naam = $row[0]["student_naam"];
      $klas = $row[0]["klas"];
      $minuten_te_laat = $row[0]["minuten_te_laat"];
      $reden_te_laat = $row[0]["reden_te_laat"];
  }
} 

$conn = null; 
//else {
//     // Als het formulier niet is ingediend, haal dan de gegevens van de student op uit de database
//     // $id = $_GET["id"];

//     $sqlStudent = "SELECT * FROM student WHERE id='$id'";
//     $stmt = $conn->prepare($sqlStudent);
//     $stmt->execute();
//     $row = $stmt->fetch();
// }
?>

<body style="margin: 50px;">
    <div class="col-md-8 mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Update Student </h3>

                <a href="CRUD.php" class='btn btn-danger float-end'>BACK</a>
                </div>

<form action="./CRUD-voeg.php" method="POST">
    

<div class="mb-3">
    <label>Student</label>
    <input type="text" name="student_naam" class="form-control"value="<?php echo $student_naam; ?>"
</div>

<div class="mb-3">
    <label>Klas</label>
    <input type="text" name="klas" class="form-control"value="<?php echo $klas; ?>"
</div>

<div class="mb-3">
    <label>Minuten te laat</label>
    <input type="text" name="minuten_te_laat" class="form-control"value="<?php echo $minuten_te_laat; ?>"
</div>

<div class="mb-3">
    <label>Reden te laat</label>
    <input type="text" name="reden_te_laat" class="form-control"value="<?php echo $reden_te_laat; ?>"
</div>
<button type="submit" name="submit" class="btn btn-primary">Student Updaten</button>

</body>