<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Eindopdracht Resultaat</title>
</head>
<body>
    

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $lengte = $_POST["lengte"];
    $vertragingDoorFile = $_POST["vertragingDoorFile"];
    $bandenspanningFiets = $_POST["bandenspanningFiets"];
    $welNietElektrisch = $_POST["welNietElektrisch"];
    $bandenspanningScooter = $_POST["bandenspanningScooter"];
    $maximaleSnelheidScooter = $_POST["maximaleSnelheidScooter"];

    
    $tijdMetFiets = $lengte / ($welNietElektrisch / 60);
    $tijdMetScooter = $lengte / ($maximaleSnelheidScooter / 60);
    $tijdMetScooter += $vertragingDoorFile;

    if ($bandenspanningFiets >= 75 && $tijdMetFiets < $tijdMetScooter) {
        $advies = "Je kunt het beste de fiets nemen";
    } else {
        $advies = "Je kunt het beste de scooter nemen";
    }

    
    echo "<h2>$advies</h2>";
}
?>

    
</body>
</html>
