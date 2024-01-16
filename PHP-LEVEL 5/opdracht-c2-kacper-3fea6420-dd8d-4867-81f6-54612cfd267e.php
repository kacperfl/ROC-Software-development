<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tabel</title>

</head>
<body style="margin: 50px;">
    

     <table class="table">
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Woonplaats</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
              
            // connectie database
            
            $servername = "localhost";
            $database = "winkel";
            $username = "root";
            $password = "";
            
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

                
            $sqlKlanten = "SELECT * FROM klanten";
            $alleKlanten = $conn->query($sqlKlanten);
            $rows = $alleKlanten->fetchAll();

            foreach($rows as $row){
                echo "<tr>
                        <td>" . $row["voornaam"] . "</td>
                        <td>" . $row["achternaam"] . "</td>
                        <td>" . $row["woonplaats"] . "</td>
                        <td>
                            <a class='btn btn-primary' href='update.php?id=" . $row['klant_id'] . "'>Update</a>
                        </td>
                        <td>
                            <a class='btn btn-danger' href='delete.php?id=" . $row['klant_id'] . "'>Delete</a>
                        </td>
                    </tr>";
            }
            


            ?>

        </tbody>
    </table>
</body>
</html>
