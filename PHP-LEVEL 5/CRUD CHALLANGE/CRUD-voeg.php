<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link
    <title>Student toevoegen</title>
</head>
<body>
    <?php

    $servername = "localhost";
    $database = "crud challange";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    if (isset($_POST['submit'])) {
        $Student = $_POST['Student'];
        $Klas = $_POST['Klas'];
        $MinutenTeLaat = $_POST['MinutenTeLaat'];
        $RedenTeLaat = $_POST['RedenTelaat'];
        try {
            $query = "INSERT INTO student (student_naam, Klas, minuten_te_laat, reden_te_laat) VALUES (:Student, :Klas, :MinutenTeLaat, :RedenTeLaat)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':Student', $Student);
            $stmt->bindParam(':Klas', $Klas);
            $stmt->bindParam(':MinutenTeLaat',  $MinutenTeLaat);
            $stmt->bindParam(':RedenTeLaat', $RedenTeLaat);

            $stmt->execute();
        }  finally {
            header("location: CRUD.php");
        } 

        

        // if ($stmt->execute()) {
        //     header("location: CRUD.php");
        // } else {
        //     echo "Er is iets fout gegaan. Probeer het opnieuw.";
        // }
    }

    ?>

    <div class="col-md-8 mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Toevoegen Student </h3>

                <a href="CRUD.php" class='btn btn-danger float-end'>BACK</a>
            </div>

            <form action="./CRUD-voeg.php" method="POST">
                <div class="mb-3">
                    <label>Student</label>
                    <input type="text" name="Student" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label>Klas</label>
                    <input type="text" name="Klas" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label>Minten te laat</label>
                    <input type="text" name="MinutenTeLaat" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Reden te laat</label>
                    <input type="text" name="RedenTelaat" class="form-control"/>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Student toevoegen</button>
            </form>
        </div>
    </div>

</body>
</html>
