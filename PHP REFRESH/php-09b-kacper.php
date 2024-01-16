<?php

//deze functie lijkt om het van andere opdracht maar er is een variabel toegevoegd genaamt groote waarmee je later aantal woorden kunt tellen.
// Bijv als je woorden wilt zien met minder dan vier letters

function kleineWoorden($groote, $string) {
    $string = explode(" ", $string);
    $teller = 0;

    foreach ($string as $woord) {
        if (strlen($woord) < $groote) {
            $teller++;
        }
    }

    return $teller;
}

// tesje
echo kleineWoorden(4, "dit is een voorbeeld");  // 3

echo "<br>";
echo kleineWoorden(3, "dit is een voorbeeld");  // 1

echo "<br>";
echo kleineWoorden(1, "dit is een voorbeeld");  // 0

echo "<br>";
echo kleineWoorden(2, "a b c d");  // 4

echo "<br>";
echo kleineWoorden(6, "abcde");  // 1

echo "<br>";

$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
echo kleineWoorden(4, $string);  // 9

echo "<br>";
echo kleineWoorden(3, $string);  // 6

echo "<br>";
echo kleineWoorden(10, $string);  // 19
?>