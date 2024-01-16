<?php


//  een functie om een string af te breken op basis van een lengte
function breekAf($length, $string) {
   
    if ($length >= strlen($string)) {
        return $string;
    }
    // else ($length >=($string)

    // Bepaalt een hoofdstring met de lengte die wordt aangegeven
    $hoofdstring = substr($string, 0, $length);

    // Controlleer of de hoofdstring eindigt met spatie
    if (substr($hoofdstring, -1) == '') {
        return $hoofdstring;
    }

    // Zoek de index van het laatste spatiekarakter in de hoofdstring
    $lastSpaceIndex = strrpos($hoofdstring, ' ');

    // Als er een spatie is gevonden maakt het een nieuwe hoofdstring tot aan de laatste spatie
    if ($lastSpaceIndex !== false) {

    
        $newSubstring = substr($hoofdstring, 0, $lastSpaceIndex);
        // echo $newSubstring;
        return $newSubstring;
    }
}

echo breekAf(32, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";

echo breekAf(18, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";

echo breekAf(19, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";

echo breekAf(20, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";

echo breekAf(11, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";

echo breekAf(25, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";

echo breekAf(3, "Deze student is erg goed in programmeren in PHP"); 
echo "<br>";
?>