<?php

//functie genaamt kleinwoorden waar een weer een fucntie wordt gebruikt genaamt explode waarmee je worden kunt scheiden
function kleineWoorden($string) {
    $string = explode(" ", $string);
    $teller = 0;


    //met behulp van functie strlen kunnen we controleren of de woordje kleiner is dan vier
    foreach ($string as $wordjes) {
        if (strlen($wordjes) < 4) {
    $teller++;
        }
    }

 //resultaat
return $teller;
}

// Een testje van de functie
echo kleineWoorden("dit is een voorbeeld");  // 3
 echo "<br>";
echo kleineWoorden("a b c d");  // 4
 echo "<br>";
echo kleineWoorden("abcd");  // 0
 echo "<br>";

//  echo kleineWoorden ("dit is een tesje om te kijken hoeveel worden onder vier te zien zijn ");
//

$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
echo kleineWoorden($string);  // 9


?>
