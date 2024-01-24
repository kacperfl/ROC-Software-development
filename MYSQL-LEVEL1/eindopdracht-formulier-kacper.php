<!DOCTYPE html>
<html>
<head>
    <title>Eindopdracht formulier</title>
    <style>
        body {background-color: powderblue;}
        
       
        </style>
</head>
<body>
    <h1>Reisadvies</h1>
    <form method="POST" action="resultaat-kacper.php">
        <label> <b>Voertuig:</b></label>
        <select name="voertuig">
            <option value="fiets">Fiets</option>
            <option value="scooter">Scooter</option>
        </select>
        <br><br>
        
        <label><b>Bandenspanning in %:</b> </label>
        <input type="number" name="bandenspanning" required>
        <br><br>
        <label> <b>Reisafstand in km:</b> </label>
        <input type="number" name="reisafstand" required>
        <br><br>
        <label> <b>Vertraging door file:</b> </label>
        <input type="number" name="vertraging">
        <br><br>
        <input  type="submit" value="Verstuur">
    </form>
</body>
</html>