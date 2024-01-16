<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Klant toevoegen</title>
</head>
<body>
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

        $query = "INSERT INTO klanten (Voornaam, Achternaam, Woonplaats) VALUES (:Voornaam, :Achternaam, :Woonplaats)";
        $stmt = $conn->prepare($query);

        $stmt->bindValue(':Voornaam', $Voornaam);
        $stmt->bindValue(':Achternaam', $Achternaam);
        $stmt->bindValue(':Woonplaats', $Woonplaats);

        if($stmt->execute()) {
            header("location: opdracht-c2-kacper.php");
        } else {
            echo "Er is iets fout gegaan. Probeer het opnieuw.";
        }
    }

    ?>

    <div class="col-md-8 mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Toevoegen Klant </h3>

                <a href="opdracht-c2-kacper.php" class='btn btn-danger float-end'>BACK</a>
            </div>

            <form action="./voeg.php" method="POST">
                <div class="mb-3">
                    <label>Voornaam</label>
                    <input type="text" name="Voornaam" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label>Achternaam</label>
                    <input type="text" name="Achternaam" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label>Woonplaats</label>
                    <input type="text" name="Woonplaats" class="form-control"/>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Klant toevoegen</button>
            </form>
        </div>
    </div>

</body>
</html>
