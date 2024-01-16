<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./opdracht.php" method="POST">
        <div>
            <label for="getal1">Getal 1</label>
            <input type="text" id="getal1" name="getal1" class="form-control">
        </div>

        <div>
            <label for="getal2">Getal 2</label>
            <input type="text" id="getal2" name="getal2" class="form-control">
        </div>
        <button type="submit" name="submit">Click</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $getal1 = $_POST["getal1"];
            $getal2 = $_POST["getal2"];

            
            if (!is_numeric($getal1) || !is_numeric($getal2)) {
                echo "Ongeldige invoer";
            } else {
                echo $getal1 * $getal2;
            }
        }
    ?>  

</body>
</html>
