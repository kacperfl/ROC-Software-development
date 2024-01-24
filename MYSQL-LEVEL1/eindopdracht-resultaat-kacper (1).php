
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {background-color: aqua;}
        
       
        </style>
    <title>Eindopdracht Resultaat</title>
</head>
<body>
    
<?php

class Weg {
    private $vertraging = 0;

    public function setVertraging($vertraging) {
        $this->vertraging = $vertraging;
    }

    public function getReistijd($afstand, $snelheid) {
        $reistijd = ($afstand / $snelheid) * 60;
        $reistijd += $this->vertraging;
        return $reistijd;
    }
}

class Voertuig {
    protected $snelheid;

    public function __construct($snelheid) {
        $this->snelheid = $snelheid;
    }

    public function getReistijd($afstand, $vertraging) {
        $weg = new Weg();
        $weg->setVertraging($vertraging);
        return $weg->getReistijd($afstand, $this->snelheid);
    }
}
//class fiets ()

class Fiets extends Voertuig {
    public function __construct() {
        parent::__construct(20);
    }
}
class Scooter extends Voertuig {
    public function __construct() {
        parent::__construct(45);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $voertuigType = $_POST['voertuig'];
    $bandenspanning = $_POST['bandenspanning'];
    $reisafstand = $_POST['reisafstand'];
    $vertraging = isset($_POST['vertraging']) ? $_POST['vertraging'] : 0;

    if ($voertuigType == 'fiets') {
        $voertuig = new Fiets();
    } elseif ($voertuigType == 'scooter') {
        $voertuig = new Scooter();
    }




    $voertuigReistijd = $voertuig->getReistijd($reisafstand, $vertraging);
    $fietsReistijd = (new Fiets())->getReistijd($reisafstand, $vertraging);
    $scooterReistijd = (new Scooter())->getReistijd($reisafstand, $vertraging);

    if ($voertuigReistijd <= $fietsReistijd) {
        $advies = "Je kunt beter met de fiets gaan.";
    } else {
        $advies = "Je kunt het beter met de scooter gaan.";
    }






    echo "<h1>Reisadvies</h1>";
    echo "<p>$advies</p>";
    echo "<ul>";

    echo "<li>Reistijd $voertuigType: $voertuigReistijd minuten</li>";
    echo "<li>Reistijd fiets: $fietsReistijd minuten</li>";
    echo "<li>Reistijd scooter: $scooterReistijd minuten</li>";

    echo "</ul>";
}
?>
</body>
</html>



